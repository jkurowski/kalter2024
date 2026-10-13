<?php

namespace App\Http\Controllers\Front\Developro;

use App\Models\Property;
use App\Http\Controllers\Controller;

use App\Models\Investment;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestmentBuildingFloorController extends Controller
{
    public function index($lang, $slug, Building $building, $buildingSlug, Floor $floor, $floorSlug, Request $request)
    {
        $investment = Investment::findBySlug($slug);
        $page = Page::where('id', 8)->first();
        $floor->loadMin('pricesProperties as min_price', DB::raw(Property::PRICE_SEARCH_SQL))
            ->loadMax('pricesProperties as max_price', DB::raw(Property::PRICE_SEARCH_SQL))
            ->loadMin('pricesProperties as min_area', DB::raw(Property::AREA_SEARCH_SQL))
            ->loadMax('pricesProperties as max_area', DB::raw(Property::AREA_SEARCH_SQL));

        // 🔥 wspólna funkcja sortowania
        $applySorting = function ($query) use ($request) {
            if ($request->filled('sort')) {

                // 🔥 usuń wszystkie wcześniejsze ORDER BY
                $query->reorder();

                $sorts = explode(',', $request->input('sort'));

                foreach ($sorts as $s) {
                    switch ($s) {
                        case 'area_asc':
                            $query->orderByRaw(Property::AREA_SEARCH_SQL . ' ASC');
                            break;

                        case 'area_desc':
                            $query->orderByRaw(Property::AREA_SEARCH_SQL . ' DESC');
                            break;

                        case 'price_asc':
                            $query->orderByRaw('CAST(price_brutto AS UNSIGNED) ASC');
                            break;

                        case 'price_desc':
                            $query->orderByRaw('CAST(price_brutto AS UNSIGNED) DESC');
                            break;

                        case 'views_asc':
                            $query->orderBy('views', 'asc');
                            break;

                        case 'views_desc':
                            $query->orderBy('views', 'desc');
                            break;
                    }
                }
            }
        };

        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $floor, $request, $applySorting)
            {
                $query->where('properties.floor_id', $floor->id);
                $query->where('properties.building_id', $building->id);

                $customOrder = [1, 3, 2, 4, 5, 6];
                $orderList = implode(',', $customOrder);
                $query->orderByRaw("FIELD(properties.type, $orderList)");
                $query->orderBy('properties.highlighted', 'DESC');
                $query->orderBy('properties.number_order');

                if ($request->input('rooms')) {
                    $query->where('rooms', $request->input('rooms'));
                }
                if ($request->input('status')) {
                    $query->where('status', $request->input('status'));
                }

                if ($request->filled('area_min') || $request->filled('area_max') || $request->filled('area')) {

                    if ($request->filled('area_min') || $request->filled('area_max')) {
                        $min = (float) $request->input('area_min', 0);
                        $max = (float) $request->input('area_max', 500);

                        $query->whereBetween(DB::raw(Property::AREA_SEARCH_SQL), [$min, $max]);

                    } elseif (str_contains($request->input('area'), '-')) {
                        [$min, $max] = explode('-', $request->input('area'));

                        $query->whereBetween(DB::raw(Property::AREA_SEARCH_SQL), [(float)$min, (float)$max]);

                    } else {
                        $query->where(DB::raw(Property::AREA_SEARCH_SQL), '>=', (float)$request->input('area'));
                    }
                }

                if ($request->filled('price_min') || $request->filled('price_max')) {
                    $min = (int) $request->input('price_min', 0);
                    $max = (int) $request->input('price_max', 5000000);

                    $query->whereBetween(
                        DB::raw(Property::PRICE_SEARCH_SQL),
                        [$min, $max]
                    );
                }

                $applySorting($query);

            },
            'building' => function($query) use ($building)
            {
                $query->where('id', $building->id);
            },
            'floor' => function($query) use ($floor)
            {
                $query->where('id', $floor->id);
            }
        ));

        return view('front.developro.investment_building_floor.index', [
            'page' => $page,
            'investment' => $investment_room,
            'building' => $building,
            'floor' => $floor,
            'properties' => $investment->buildingRooms,
            // rzut zawsze ze wszystkimi lokalami (kolory statusów), filtry dotyczą tylko listy
            'planProperties' => $floor->properties()->where('building_id', $building->id)->with(['floor', 'investment'])->get(),
            'next_floor' => $floor->findNext($investment->id, $floor->position, $building->id),
            'prev_floor' => $floor->findPrev($investment->id, $floor->position, $building->id),
            'sort' => $request->input('sort')
        ]);
    }

}

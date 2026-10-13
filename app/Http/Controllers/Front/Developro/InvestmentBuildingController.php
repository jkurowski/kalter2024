<?php

namespace App\Http\Controllers\Front\Developro;

use App\Models\Property;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

use App\Models\Building;
use App\Models\Investment;
use Illuminate\Support\Facades\DB;

class InvestmentBuildingController extends Controller
{

    public function index($lang, $slug, Building $building, Request $request)
    {
        $investment = Investment::findBySlug($slug);

        $building->loadMin('pricesProperties as min_price', DB::raw(Property::PRICE_SEARCH_SQL))
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
            'buildingRooms' => function($query) use ($building, $request, $applySorting)
            {
                $query->where('properties.building_id', $building->id);
                $query->orderBy('properties.highlighted', 'DESC');
                $query->orderBy('properties.number_order', 'ASC');

                if ($request->input('rooms')) {
                    $query->where('rooms', $request->input('rooms'));
                }
                if ($request->input('status')) {
                    $query->where('status', $request->input('status'));
                }
                if ($request->input('floor')) {
                    $query->where('properties.floor_id', $request->input('floor'));
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

                $query->where('properties.type', 1);
            },
            'buildingFloors' => function($query) use ($building)
            {
                $query->where('building_id', $building->id);
            }
        ));

        $page = Page::where('id', 8)->first();

        return view('front.developro.investment_building.index', [
            'investment' => $investment_room,
            'building' => $building,
            'properties' => $investment->buildingRooms,
            'page' => $page,
            'prev_building' => $building->findPrev($investment->id, $building->id),
            'next_building' => $building->findNext($investment->id, $building->id),
            'sort' => $request->input('sort')
        ]);
    }

    public function show($id)
    {
        //
    }
}

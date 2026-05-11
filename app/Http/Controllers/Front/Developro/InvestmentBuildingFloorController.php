<?php

namespace App\Http\Controllers\Front\Developro;

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
        $floor->loadMin('pricesProperties as min_price', 'price_search')
            ->loadMax('pricesProperties as max_price', 'price_search');

        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $floor, $request)
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
                if ($request->input('sort')) {
                    $order_param = explode(':', $request->input('sort'));
                    $column = $order_param[0];
                    $direction = $order_param[1];
                    $query->orderBy($column, $direction);
                }

                if ($request->filled('area_min') || $request->filled('area_max') || $request->filled('area')) {

                    if ($request->filled('area_min') || $request->filled('area_max')) {
                        $min = (float) $request->input('area_min', 0);
                        $max = (float) $request->input('area_max', 500);

                        $query->whereBetween('area_search', [$min, $max]);

                    } elseif (str_contains($request->input('area'), '-')) {
                        [$min, $max] = explode('-', $request->input('area'));

                        $query->whereBetween('area_search', [(float)$min, (float)$max]);

                    } else {
                        $query->where('area_search', '>=', (float)$request->input('area'));
                    }
                }

                if ($request->filled('price_min') || $request->filled('price_max')) {
                    $min = (int) $request->input('price_min', 0);
                    $max = (int) $request->input('price_max', 5000000);

                    $query->whereBetween(
                        DB::raw('CAST(price_search AS UNSIGNED)'),
                        [$min, $max]
                    );
                }

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
            'next_floor' => $floor->findNext($investment->id, $floor->position, $building->id),
            'prev_floor' => $floor->findPrev($investment->id, $floor->position, $building->id)
        ]);
    }

}

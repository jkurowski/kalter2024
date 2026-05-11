<?php

namespace App\Http\Controllers\Front\Developro;

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

        $building->loadMin('pricesProperties as min_price', 'price_search')
            ->loadMax('pricesProperties as max_price', 'price_search');


        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $request)
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

        ]);
    }

    public function show($id)
    {
        //
    }
}

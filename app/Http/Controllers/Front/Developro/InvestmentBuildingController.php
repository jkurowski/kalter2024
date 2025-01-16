<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

use App\Models\Building;
use App\Models\Investment;

class InvestmentBuildingController extends Controller
{

    public function index($lang, $slug, Building $building, Request $request)
    {
        $investment = Investment::findBySlug($slug);

        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $request)
            {
                $query->where('properties.building_id', $building->id);
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

                $query->where('type', 1);

                $query->orderBy('number_order');
            },
            'buildingFloors' => function($query) use ($building)
            {
                $query->where('building_id', $building->id);
            }
        ));

        $page = Page::where('id', 2)->first();

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

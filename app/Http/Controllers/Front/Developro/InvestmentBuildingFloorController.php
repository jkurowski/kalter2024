<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;

use App\Models\Investment;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Page;
use Illuminate\Http\Request;

class InvestmentBuildingFloorController extends Controller
{
    public function index($lang, $slug, Building $building, $buildingSlug, Floor $floor, $floorSlug, Request $request)
    {
        $investment = Investment::findBySlug($slug);
        $page = Page::where('id', 8)->first();

        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $floor, $request)
            {
                $query->where('properties.floor_id', $floor->id);
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
                $customOrder = [1, 3, 2, 4, 5, 6];
                $orderList = implode(',', $customOrder);
                $query->orderByRaw("FIELD(properties.type, $orderList)");
                $query->orderBy('properties.number_order');
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

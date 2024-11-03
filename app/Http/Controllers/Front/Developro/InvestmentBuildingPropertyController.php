<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;

use App\Models\Investment;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Page;
use App\Models\Property;
use App\Models\RodoRules;


class InvestmentBuildingPropertyController extends Controller
{
    public function index($lang, $slug, Building $building, $buildingSlug, Floor $floor, $floorSlug, Property $property)
    {
        $investment = Investment::findBySlug($slug);
        $page = Page::where('id', 8)->first();


        return view('front.developro.investment_property.index', [
            'page' => $page,
            'investment' => $investment,
            'building' => $building,
            'floor' => $floor,
            'property' => $property
        ]);
    }
}

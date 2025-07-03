<?php

namespace App\Http\Controllers\Front\Developro\History;

use App\Http\Controllers\Controller;

//CMS
use App\Models\Property;

class IndexController extends Controller
{
    public function show(Property $property)
    {
        if (!request()->ajax()) {
            abort(403, 'Tylko AJAX');
        }

        return view('front.developro.investment_shared.pricehistory', compact('property'))->render();
    }

    public function others(Property $property)
    {
        if (!request()->ajax()) {
            abort(403, 'Tylko AJAX');
        }

        $others = Property::where('type', '!=', 1)
            ->where('status', 1)
            ->where('investment_id', $property->investment_id)
            ->when($property->building_id, function ($query, $buildingId) {
                return $query->where('building_id', $buildingId);
            })
            ->whereNotIn('id', function ($query) {
                $query->select('related_property_id')
                    ->from('property_property');
            })
            ->get();


        return view('front.developro.investment_shared.others', compact('others'))->render();
    }

    public function other(Property $property)
    {
//        if (!request()->ajax()) {
//            abort(403, 'Tylko AJAX');
//        }

        return view('front.developro.investment_shared.other', compact('property'))->render();
    }

    public function otherTable(Property $property)
    {
//        if (!request()->ajax()) {
//            abort(403, 'Tylko AJAX');
//        }

        return view('front.developro.investment_shared.other-table', compact('property'))->render();
    }
}

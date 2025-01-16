<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//CMS
use App\Models\Investment;
use App\Models\Property;
use App\Models\Page;

class SearchController extends Controller
{
    private int $pageId;
    public function __construct()
    {
        $this->pageId = 8;
    }

    public function index(Request $request)
    {
        $page = Page::find($this->pageId);

// Extract query parameters with default values
        $filters = $request->only([
            'city', 'rooms', 'area', 'advanced', 'invest', 'status',
            'kitchen', 'garden', 'price', 'type'
        ]);

// Provide default values for missing filters
        $filters = array_merge([
            'city' => null,
            'rooms' => null,
            'area' => null,
            'advanced' => null,
            'invest' => null,
            'status' => null,
            'kitchen' => null,
            'garden' => null,
            'price' => null,
            'type' => null,
        ], $filters);

// Filter Investments
        $investments = Investment::query()
            ->where('status', '=', 1)
            ->when($filters['city'], fn($query, $city) => $query->where('city_id', $city))
            ->when($filters['invest'], fn($query, $invest) => $query->where('id', $invest))
            ->when($filters['advanced'], fn($query, $advanced) => $query->where('progress', $advanced))
            ->get();

// Filter Properties
        $properties = Property::query()
            ->when($filters['rooms'], fn($query, $rooms) => $query->where('rooms', $rooms))
            ->when($filters['area'], function ($query, $area) {
                // Check if area contains a range (e.g., "30-50")
                if (strpos($area, '-') !== false) {
                    [$min, $max] = explode('-', $area);
                    $query->whereBetween('area', [(float) $min, (float) $max]);
                } else {
                    // If not a range, use it as a minimum value
                    $query->where('area', '>=', (float) $area);
                }
            })
            ->when($filters['price'], fn($query, $price) => $query->where('price', '<=', $price))
            ->when($filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($filters['kitchen'], fn($query, $kitchen) => $query->where('kitchen', $kitchen))
            ->when($filters['garden'], fn($query, $garden) => $query->where('garden', $garden))
            ->when($filters['type'], fn($query, $type) => $query->where('type', $type))
            ->get();

        // Group properties by investment
        $results = $investments->map(function ($investment) use ($properties) {
            return [
                'investment' => $investment,
                'properties' => $properties->where('investment_id', $investment->id),
            ];
        });

        return view('front.developro.search.index', [
            'page' => $page,
            'results' => $results,
        ]);
    }
}

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
            ->where('status', 1)
            ->when($filters['city'], fn($query, $city) => $query->where('city_id', $city))
            ->when($filters['invest'], fn($query, $invest) => $query->where('id', $invest))
            ->when($filters['advanced'], function ($query, $advanced) {
                if (in_array($advanced, [1, 7])) {
                    // Strict match for 1 and 7
                    $query->where('progress', $advanced);
                } else {
                    // Show all progress values from the selected one upwards
                    $query->where('progress', '>=', $advanced);
                }
            })
            ->orderByDesc('progress') // Sort progress from high to low (7 → 1)
            ->get();


// Filter Properties
        $customOrder = [1, 3, 2, 4, 5, 6];
        $orderList = implode(',', $customOrder);

        $properties = Property::query()
            ->with(['building' => fn($query) => $query->select('id', 'active', 'name')])
            ->with(['floor' => fn($query) => $query->select('id', 'name')])
            ->with(['city' => fn($query) => $query->select('cities.id as city_id', 'cities.name')])
            //->whereHas('building', fn($query) => $query->where('active', 1))
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
            ->when($filters['price'] ?? null, function ($query, $price) {
                $range = explode('-', $price);
                if (count($range) === 2) {
                    $query->whereBetween('price_search', [$range[0], $range[1]]);
                }
            })
            ->when($filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($filters['kitchen'], fn($query, $kitchen) => $query->where('kitchen', $kitchen))

            ->when(filled($filters['garden']) && $filters['garden'] == 1, fn($query) =>
            $query->whereNotNull('garden_area')->where('garden_area', '!=', '')
            )
            ->when(filled($filters['garden']) && $filters['garden'] == 2, fn($query) =>
            $query->whereNull('garden_area')->orWhere('garden_area', '')
            )

            ->when($filters['type'], fn($query, $type) => $query->where('type', $type))
            ->orderByRaw("FIELD(properties.type, $orderList)")
            ->orderBy('properties.highlighted', 'DESC')
            ->orderBy('properties.number_order', 'ASC')
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

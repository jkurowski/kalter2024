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
            'kitchen', 'garden', 'price', 'type', 'sort',
            'area_min', 'area_max', 'price_min', 'price_max'
        ]);

// Provide default values for missing filters
        $filters = array_merge([
            'city' => null,
            'rooms' => null,
            'area' => null,
            'area_min' => null,
            'area_max' => null,
            'advanced' => null,
            'invest' => null,
            'status' => null,
            'kitchen' => null,
            'garden' => null,
            'price' => null,
            'price_min' => null,
            'price_max' => null,
            'type' => null,
            'sort' => null,
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
            ->when($filters['area'] || $filters['area_min'] || $filters['area_max'], function ($query) use ($filters) {
                if ($filters['area_min'] || $filters['area_max']) {
                    $min = (float)($filters['area_min'] ?? 0);
                    $max = (float)($filters['area_max'] ?? 500);
                    $query->whereBetween('area', [$min, $max]);
                } elseif (strpos($filters['area'], '-') !== false) {
                    [$min, $max] = explode('-', $filters['area']);
                    $query->whereBetween('area', [(float) $min, (float) $max]);
                } else {
                    $query->where('area', '>=', (float) $filters['area']);
                }
            })
            ->when($filters['price'] || $filters['price_min'] || $filters['price_max'], function ($query) use ($filters) {
                if ($filters['price_min'] || $filters['price_max']) {
                    $min = (float)($filters['price_min'] ?? 0);
                    $max = (float)($filters['price_max'] ?? 5000000);
                    $query->whereBetween('price_search', [$min, $max]);
                } else {
                    $range = explode('-', $filters['price']);
                    if (count($range) === 2) {
                        $query->whereBetween('price_search', [$range[0], $range[1]]);
                    }
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
            ->when($filters['sort'], function ($query, $sort) {
                $sorts = explode(',', $sort);
                foreach ($sorts as $s) {
                    switch ($s) {
                        case 'area_asc':
                            $query->orderBy('area', 'asc');
                            break;
                        case 'area_desc':
                            $query->orderBy('area', 'desc');
                            break;
                        case 'price_asc':
                            $query->orderBy('price_brutto', 'asc');
                            break;
                        case 'price_desc':
                            $query->orderBy('price_brutto', 'desc');
                            break;
                        case 'views_asc':
                            $query->orderBy('views', 'asc');
                            break;
                        case 'views_desc':
                            $query->orderBy('views', 'desc');
                            break;
                    }
                }
            })
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

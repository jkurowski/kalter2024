<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//CMS
use App\Repositories\InvestmentRepository;
use App\Models\Investment;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Page;

class InvestmentPlanController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 8;
    }

    public function index($lang, Request $request, $slug)
    {
        $investment = Investment::findBySlug($slug);

        if($investment->type == 1){
            $investment_room = $investment->load(array(
                'buildingRooms' => function ($query) use ($request) {
                    $query->orderBy('properties.highlighted', 'DESC');
                    $query->orderBy('properties.number_order', 'ASC');


                    if ($request->input('rooms')) {
                        $query->where('rooms', $request->input('rooms'));
                    }

                    if ($request->input('status')) {
                        $query->where('status', $request->input('status'));
                    }

                    if ($request->input('floor')) {
                        $query->where('floor_id', $request->input('floor'));
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

                    if ($request->input('sort')) {
                        $order_param = explode(':', $request->input('sort'));
                        $column = $order_param[0];
                        $direction = $order_param[1];
                        $query->orderBy($column, $direction);
                    }
                    $query->where('type', 1);
                },
                'plan'
            ));

            $properties = $investment_room->buildingRooms;
        }

        /**
         * Inwestycja z jednym budynkiem
         */
        if ($investment->type == 2) {
            $investment_room = $investment->load(array(
                'floorRooms' => function ($query) use ($request, $investment) {
                    $query->orderBy('properties.highlighted', 'DESC');
                    $query->orderBy('properties.number_order', 'ASC');

                    if ($request->input('rooms')) {
                        $query->where('rooms', $request->input('rooms'));
                    }

                    if ($request->input('status')) {
                        $query->where('status', $request->input('status'));
                    }

                    if ($request->input('floor')) {
                        $query->where('floor_id', $request->input('floor'));
                    }

                    if ($investment->show_properties == 3) {
                        $query->where('status', 1);
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


                    if ($request->input('sort')) {
                        $order_param = explode(':', $request->input('sort'));
                        $column = $order_param[0];
                        $direction = $order_param[1];
                        $query->orderBy($column, $direction);
                    }

                    $query->where('properties.type', 1);
                }
            ));

            $properties = $investment_room->floorRooms;
        }

        /**
         * Inwestycja z domami
         */
        if ($investment->type == 3) {
            $investment_room = $investment->load(array(
                'properties' => function ($query) use ($request) {
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
                }
            ));

            $properties = $investment_room->properties;
        }

        $page = Page::where('id', $this->pageId)->first();

        return view('front.developro.investment_plan.index', [
            'investment' => $investment,
            'properties' => $properties,
            'uniqueRooms' => $this->repository->getUniqueRooms($investment_room->properties),
            'page' => $page
        ]);
    }

    public function mockup($lang, $slug)
    {
        $investment = Investment::findBySlug($slug);

        $page = Page::where('id', $this->pageId)->first();

        return view('front.developro.investment_plan.mockup', [
            'investment' => $investment,
            'page' => $page
        ]);
    }
}



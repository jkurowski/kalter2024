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



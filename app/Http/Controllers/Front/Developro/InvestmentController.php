<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;

// CMS
use App\Models\Page;
use App\Repositories\InvestmentRepository;

class InvestmentController extends Controller
{
    private InvestmentRepository $repository;
    private int $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 4;
    }

    public function show($lang, $slug)
    {
        $investment = Investment::findBySlug($slug);
        $page = Page::find($this->pageId);

        if($investment->status == 1){
            return view('front.investments.'.$slug.'.index', [
                'investment' => $investment,
                'page' => $page
            ]);
        } else if($investment->status == 2){
            return view('front.developro.completed.show', [
                'investment' => $investment,
                'page' => $page
            ]);
        } else {
            return view('front.investments.'.$slug.'.index', [
                'investment' => $investment,
                'page' => $page
            ]);
        }
    }
}

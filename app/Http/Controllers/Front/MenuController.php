<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\JobRepository;

class MenuController extends Controller
{
    private JobRepository $repository;

    public function __construct(JobRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($locale, $uri = null)
    {
        $page = Page::where('uri', $uri)->firstOrFail();
        //$parent = Page::ancestorsOf($page->id)->first();

        $data = [];
        if($uri == 'kariera'){
            $data['jobofferts'] = $this->repository->allSort('ASC');
        }

        return view('front.menupage.'.$uri)
            ->with([
                'page' => $page,
                //'parent' => $parent
                'uri' => $uri,
                'data' => $data
            ]);
    }
}

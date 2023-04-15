<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\News\NewsRepositoryContract;
use App\Repositories\News\RepositoryContract;
use Illuminate\Http\Request;
use App\Http\Requests\Search\SearchRequest;

class SearchController extends Controller
{
    public function __construct(NewsRepositoryContract $newsRepositoryContract) {
        $this->newsRepositoryContract = $newsRepositoryContract;
    }

    /**
     * Display a listing of the resource.
     * @param NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(SearchRequest $request)
    {
        $inputSearch = $request->get('query');
        $news = $this->newsRepositoryContract->search(['description', 'category', 'title'], $inputSearch);
      
        return view('news.index', compact('news', 'inputSearch'));
    }
}

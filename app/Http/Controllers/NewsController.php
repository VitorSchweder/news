<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\News\NewsRepositoryContract;
use Illuminate\Http\Request;
use App\Http\Requests\News\NewsRequest;

class NewsController extends Controller
{
    public function __construct(NewsRepositoryContract $newsRepositoryContract) {
        $this->newsRepositoryContract = $newsRepositoryContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->newsRepositoryContract->all();        
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    { 
        $this->newsRepositoryContract->store($request->all());
       
        return redirect()->route('news.index')                                                                                                       
            ->with('success', 'Notícia criada com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    { 
        $input = $request->except(['_token', '_method']);

        $this->newsRepositoryContract->updateById($input, $news->id);
      
        return redirect()->route('news.index')
             ->with('success', 'Notícia atualizada com sucesso');
    }
}

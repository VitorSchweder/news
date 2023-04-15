@extends('news.layout')
 
@section('content')
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex margin-tb">
                    <div class="pull-left col-lg-6">
                        <a href="{{ route('news.index') }}">LOGO</a>
                    </div>
                    <div class="pull-right col-lg-6 d-flex">
                        <a href="{{ route('news.create') }}"> CADASTRAR NOTÍCIAS</a>
                        <a href="{{ route('news.index') }}"> EXIBIR NOTÍCIAS</a>

                        <form method="GET" action="{{ route('search-result') }}">
                            <input class="form-control" value="{{ $inputSearch ?? null }}" type="search" name="query" type="text">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="container">
        <div class="row container-list-news">
            @forelse ($news as $newsObj)
                <div class="col-lg-4 container-news">
                    <h3 class="news-title">{{ $newsObj->title }}</h3>
                    <p class="news-description">{{ $newsObj->description }}</p>
                    <a class="btn" href="{{ route('news.edit',$newsObj->id) }}">Acessar</a>
                </div>
            @empty
                <p class="search-result">Não foi encontrada nenhuma Notícia.</p>
            @endforelse
        </div>
    </div>      
@endsection
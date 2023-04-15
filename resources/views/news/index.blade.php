@extends('news.layout')
 
@section('content')
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex margin-tb">
                    <div class="pull-left col-lg-6">
                        <a href="{{ route('news-list') }}">LOGO</a>
                    </div>
                    <div class="pull-right col-lg-6 d-flex">
                        <a href="{{ route('news.create') }}"> CADASTRAR NOTÍCIAS</a>
                        <a href="{{ route('news-list') }}"> EXIBIR NOTÍCIAS</a>

                        <form method="GET" action="{{ route('search-result') }}">
                            <input class="form-control" value="{{ $inputSearch ?? null }}" type="search" name="query" type="text">
                            <span class="icon"></span>
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
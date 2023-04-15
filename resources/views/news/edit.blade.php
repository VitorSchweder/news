@extends('news.layout')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="h-title">Alterar Notícia</h2>
            </div>
            <div class="pull-right b-back">
                <a class="btn btn-primary" href="{{ route('news.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Alguns erros ocorridos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('news.update', $news->id) }}" class="form-cad" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="Título">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="category" value="{{ $news->category }}" class="form-control" placeholder="Categoria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descrição">{{ $news->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Publicar Notícia')

@section('content')
    
    <div class="container container-sm">
    <h1 class="text-center">Publicar Notícia</h1>
        <form action="{{ route('store-noticia') }}" method="POST" class="p-1">
            @csrf
            @if(session('msgCadNoticia'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('msgCadNoticia') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">
            </div>
            <div class="mb-3">
                <label for="categoria"  class="form-label">Categoria</label>
                <select type="select" name="categoria" id="categoria" class="form-control" value="{{ old('categoria') }}">
                    @foreach($categorias as $categoria)
                        <option>{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="conteudo"  class="form-label">Conteúdo</label>
                <textarea type="text" name="conteudo" id="conteudo" class="form-control">{{ old('conteudo') }}</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
@endsection

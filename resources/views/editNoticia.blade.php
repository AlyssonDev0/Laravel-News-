@extends('layouts.app')

@section('title', 'Editar Noticia')

@section('content')
<div class="container container-sm">
    <h1 class="text-center">Editar Notícia</h1>
        <form action="{{ route('update-noticia', ['id' => $noticia->id]) }}" method="POST" class="p-5">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             @endforeach
        @endif
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $noticia->titulo }}">
            </div>
            <div class="mb-3">
                <label for="categoria"  class="form-label">Categoria</label>
                <select type="select" name="categoria" id="categoria" class="form-control">
                    @foreach($categorias as $categoria)
                        @if($categoria->nome != $noticia->categoria)
                            <option>{{ $categoria->nome }}</option>
                        @else
                            <option selected>{{ $categoria->nome }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="conteudo"  class="form-label">Conteúdo</label>
                <textarea type="text" name="conteudo" id="conteudo" class="form-control"> {{ $noticia->conteudo }}</textarea>
            </div>
            <a href="/">
                <button type="button" name="submit" class="btn btn-secondary">Cancelar</button>
            </a>
            <button type="submit" name="submit" class="btn btn-success">Salvar Alterações</button>
        </form>
    </div>
@endsection
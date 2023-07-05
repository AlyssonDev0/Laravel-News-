@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<div class="container container-sm">
    <h1 class="text-center">Editar Categoria</h1>
        <form action="{{ route('update-categoria', ['id' => $categoria->id]) }}" method="POST" class="p-5">
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
                <label for="categoria" class="form-label">Nome</label>
                <input type="text" name="nome" id="input" class="form-control" value="{{ $categoria->nome }}">
            </div>
            <a href="{{ route('create-categoria') }}">
                <button type="button" name="submit" class="btn btn-secondary">Cancelar</button>
            </a>
            <button id="botao" type="submit" name="submit" class="btn btn-success" disabled>Salvar Alterações</button>
        </form>
    </div> 
    <script>
           // Chama a função habilitarBotao após o carregamento do DOM
        document.addEventListener('DOMContentLoaded', function() {
            habilitarBotaoEditCategoria();
        });
    </script>
@endsection

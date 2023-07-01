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
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $categoria->nome }}">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Salvar Alterações</button>
        </form>
    </div>

@endsection
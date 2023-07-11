@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')

@include('modals.categoriaCreate')

<div class="container-sm">
    <div class="d-flex justify-content-between p-2">
        <h1>Categorias</h1>
        <!-- Botão  Modal Cadastrar Categoria -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadCategoriaModal">
            Cadastrar
        </button>
    </div>
    @if(session('msgCadCategoria'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msgCadCategoria') }}
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

    <table class="table table-light table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <th scope="row">{{ $contadorInicial  + $loop->iteration }}</th>
                <td>{{ $categoria->nome }}</td>
                <td class="d-flex justify-content-start gap-1">
                    <a href="{{ route('create-update-categoria', ['id' => $categoria->id])}}">
                        <button class="btn btn-warning">
                            <i class="bi bi-pencil"></i>
                        </button>
                    </a>
                    <form method="POST" action="{{ route('destroy-categoria', $categoria->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" name="submit" type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $categorias->links() }}
    </div>
</div>
@endsection
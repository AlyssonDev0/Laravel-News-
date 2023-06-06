@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')

<!-- Modal Cadastrar Categoria -->
<div class="modal fade" id="cadCategoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/categoria/cadastrar" method="POST">
                @csrf
                <label for="nome" class="form-label d-none">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome da Categoria" class="form-control">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="submit" class="btn btn-success">Salvar</button>
            </form>
      </div>
    </div>
  </div>
</div>
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
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @php($count=1)
            @foreach($categorias as $categoria)
                <tr>
                <th scope="row">{{ $count }}</th>
                <td>{{ $categoria->nome }}</td>
                <td class="d-flex justify-content-start gap-1">
                    <form action="/categorias/deletar/{{ $categoria->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                </tr>
            @php($count++)
            @endforeach
            </tbody>
        </table>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container pb-3">
    <div class="mb-3 d-md-flex justify-content-between">
        <h3 class="d-none d-md-block">Lista de Notícias</h3>
        <form action="" method="GET" class="d-flex" role="search">
            @csrf
            <input class="form-control me-2 w-sm-100" name="search" type="search" placeholder="Buscar Notícia" aria-label="Search">
            <button class="btn btn-outline-info " type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
    @if($search)
        <h4 class="mb-3 text-secondary">Buscando por: "{{ $search }}"</h4>
    @endif
    @if(session('msgNoticias'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">  
            {{ session('msgNoticias') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif  
        @if(count($noticias) > 0)
        <div class="row">
            @foreach($noticias as $noticia)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <p class="card-header">{{ $noticia -> categoria }}</p>
                    <div class="card-body">
                        <h5 class="card-title">{{ $noticia -> titulo }}</h5>
                        <p class="card-text">{{ $noticia -> conteudo }}<p>
                        <div class="d-flex align-items-end  justify-content-between">
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Opções   
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('create-update-noticia', ['id' => $noticia->id]) }}">Editar</a></li>
                                <form action="{{ route('destroy-noticia', ['id' => $noticia->id ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <li><button class="dropdown-item" name="submit" type="submit" >Deletar</button></li>
                                </form>
                            </ul>
                            </div>
                            <span class="text-secondary">{{ date('d/m/Y', strtotime($noticia->created_at) )}}</span>
                        </div>                       
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-2">
            {{ $noticias->appends(['search' => $search])->links() }}
        </div>
        @else
            <h2 class="text-center pt-3">Não há notícias a exibir. <a class="text-primary" href="/cadastro-noticia">Publicar</a></h2>
        @endif
    </div>
@endsection

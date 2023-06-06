<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="css/app.css" rel="stylesheet">

</head>
<body>
<div class="min-vh-100 position-relative d-flex flex-column justify-content-between">
<header>
<nav class="navbar navbar-expand-lg bg-dark mb-4" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">NOTÍCIAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/"><i class="bi bi-house"></i>  Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastro-noticia"><i class="bi bi-plus-square"></i>  Publicar Notícia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastro-categoria"><i class="bi bi-plus-square"></i>  Cadastrar Categoria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main>
<i class="fa-sharp fa-light fa-envelope"></i>
    @yield('content')
</main>
<footer class="bottom-0 py-3 mt-0 bg-light border-top text-center w-100">
<section class="d-flex justify-content-center justify-content-lg-between">
    <!-- Left -->
    <div class="me-5 d-none px-4 d-lg-block">
      <span>Desenvolvido por Alysson Oliveira &copy; 2023</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin" style="width: 100;"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
</footer>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

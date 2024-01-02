<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>VochTech</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href={{route('dashboard')}}><img src="https://vochtech.com.br/img/logo-voch.svg" class="img-logo" height="70px" width="140px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{ route('create-colaborador') }}>Cadastro Colaborador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('create-unidade')}}>Cadastro Unidade</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href={{route('edit-colaborador')}}>Alterar Desempenho Colaborador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('show-colaboradores')}}>Relatorio Colaboradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('show-ranking')}}>Ranking Colaboradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('show-total')}}>Total Colaboradores</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>   
    @yield('content')

    <footer>
        <p align='center'>VochTech &copy; {{date('Y')}}</p>
    </footer>

</body>

</html>
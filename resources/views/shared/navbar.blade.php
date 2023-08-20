<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark nav">
        <div class="container-fluid color">
            <a class="navbar-brand " href="{{route('semillero')}}">Semillero</a>
            <form class="d-flex col-5" role="search">
                <input class="form-control  " type="search" placeholder="Buscar" aria-label="Search">
            </form>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item"  href="{{route('semilleroAdicionar')}}">Adicionar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item"  href="{{route('semilleroEditar')}}">Editar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('adicionarMonitor')}}">Asignar Monitor</a></li>
  
                </ul>
            </div>
            <a class="btn btn-danger " href="{{route('login')}}">Salir</a>

        </div>
    </nav>

    @yield('content')
</body>
</html>
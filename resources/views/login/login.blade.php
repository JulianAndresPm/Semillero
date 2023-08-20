@extends('app')

@section('content')


<nav class="navbar navbar-dark bg-dark nav">
  <div class="container-fluid color">
    <a class="navbar-brand">Semillero</a>
  </div>
</nav>

<div class="contenedor text-center">

  <link rel="stylesheet" href="/css/login.css">

    <form class="d-flex flex-column align-content-center flex-wrap" action= "{{route('userLogin')}}" method= "POST">
      @csrf

      <div class="form-outline mb-4 col-3">
        <input type="email" id="form2Example1" class="form-control" require />
        <label class="form-label" for="form2Example1">Usuario</label>
      </div>
    
      <div class="form-outline mb-4 col-3">
        <input type="password" id="form2Example2" class="form-control" require/>
        <label class="form-label" for="form2Example2">Contraseña</label>
      </div>
    
      <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
    
    
    </form>
    
</div>


@endsection

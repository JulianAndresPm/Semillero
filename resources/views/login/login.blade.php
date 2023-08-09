@extends('shared.navbar')

@section('content')

<div class="container text-center">
    <form class="mt-4 d-flex flex-column align-content-center flex-wrap">
      <!-- Email input -->
      <div class="form-outline mb-4 col-5">
        <input type="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Usuario</label>
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4 col-5">
        <input type="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Contraseña</label>
      </div>
    
      <!-- Submit button -->
      <button type="button" class="btn btn-primary btn-block mb-4">Ingresar</button>
    
      <!-- Register buttons -->
      <div class="text-center">
        <p>No tienes usuario <a href="#!">Registrar</a></p>
      </div>
    </form>
    
</div>

@endsection
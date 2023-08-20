@extends('shared.navbar')


@section('content')

    <link rel="stylesheet" type="text/css" href="/css/editar.css">
    <div class="container">
        <div class="row">
            <div class="clase1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="text-center">
                            <a href="{{route('semilleroEditarUno',1)}}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="text-center">
                            <a href="{{route('semilleroEditarUno',1)}}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card" style="width: 18rem;">
                  
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="text-center">
                            <a href="{{route('semilleroEditarUno',1)}}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                    
                       
                        
                    
                </div>

                <div class="card" style="width: 18rem;">
                  
                  <div class="card-body">
                      <h5 class="card-title text-center">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="text-center">
                        <a href="{{route('semilleroEditarUno',1)}}" class="btn btn-primary">Editar</a>
                      </div>
                  </div>
                  
                     

                  
              </div>

            </div>
        </div>

    </div>
    
 
  
@endsection

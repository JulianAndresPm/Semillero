@extends('shared.navbar')


@section('content')

    <link rel="stylesheet" type="text/css" href="/css/editar.css">
    <div class="container">
       <form action="">
            <table class="table tabletable-hover table-sm">
                <tbody>
                    <tr>
                        <th>Codigo</th>
                        <td>
                            <input class="form-control" type="text" placeholder="Ingrese Codigo">
                        </td>
                    </tr>
                    <tr>
                        <th>Titulo</th>
                        <td>
                            <input class="form-control" type="text" placeholder="Ingrese Titulo">
                        </td>
                    </tr>
                    <tr>
                        <th>Integrantes</th>
                        <td>
                            <table class="table">
                                <thead class="table-lightx">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">
                                        <button type="button" class="btn btn-success col-5">+</button>
                                    </th>

                                    </tr>
                                </thead>
                                <tbody class=" table-group-divider">
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Tipo de proyecto</th>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Seleccione uno
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">Investigación</li>
                                    <li class="dropdown-item">Inovacion y desarrollo</li>
                                    <li class="dropdown-item">Emprendimiento</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Desactivado
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha Inicio</th>
                        <td>
                            <input class="form-control" type="date" id="fecha" name="fecha">
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha Finalizacion</th>
                        <td>
                            <input class="form-control" type="date" id="fecha" name="fecha">
                        </td>
                    </tr>
                    <tr>
                        <th>Propuesta</th>
                        <td>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </td>
                    </tr>
                    <tr>
                        <th>Proyecto Final</th>
                        <td>
                            <input type="file" class="form-control" id="inputGroupFile02"> 
                        </td>
                    </tr>
                </tbody>
            </table>

       </form>

    </div>
    
 
  
@endsection

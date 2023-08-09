@extends('app')

<head><link rel="stylesheet" type="text/css" href="/css/proyectos.css"></head>

@section('content')
<br>
<main>
    <h2>Datos - Estudiantes</h2>
    <table class="table">
    <thead class="table-lightx">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
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

    <br>
    <h2>Datos - Proyecto</h2>
    <div class="table2">
    <table class="table tabletable-hover table-sm">
    <tbody>
        <tr>
            <th>Codigo</th>
            <td>21905</td>
        </tr>
        <tr>
            <th>Titulo</th>
            <td>Programacion</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>Activo</td>
        </tr>
        <tr>
            <th>Fecha de inicio</th>
            <td type="">02/02/2019</td>
        </tr>
        <tr>
            <th>Fecha de Finalización</th>
            <td type="">05/07/2023</td>
        </tr>
    </tbody>
    </table>
    </div>

    <object data="https://www.rutasnavarra.com/GPS/Teoria/GPSavanzado.pdf" type="aplication/pdf"></object>


</mian>
@endsection

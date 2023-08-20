@extends('shared.navbar')


@section('content')

    <link rel="stylesheet" type="text/css" href="/css/monitor.css">
    <div class="container">
        <form  action= "{{route('crearMonitor')}}" method= "POST">
            <table class="table tabletable-hover table-sm">
                <tbody>
                    <tr>
                        <th>Codigo</th>
                        <td>
                            <input class="form-control" type="text" placeholder="Ingrese Codigo">
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>
                            <input class="form-control" type="text" placeholder="Ingrese Nombre del monitor">
                        </td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td>
                            <input class="form-control" type="text" placeholder="Ingrese Apellido del monitor">
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary"> Crear Monitor</button>
       </form>

    </div>
    
 
  
@endsection

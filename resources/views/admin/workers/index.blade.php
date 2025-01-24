@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('workers.create')}}"> Registrar Trabajador</a>

        <br>
        <br>

        <table class="table">
            <thead>
                <th> nombre </th>
                <th> posicion </th>
                <th> cantacto </th>
                <th> activo</th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ( $workers as $t)
                <tr>
                    <td>{{$t->nombre}}</td>
                    <td>{{$t->posicion}}</td>
                    <td>{{$t->contacto}}</td>
                    <td>{{$t->activo}}</td>
                   
                                   
                  
                    <td>
                        <a class="btn btn-info" href="{{route("workers.show", $t)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route("workers.edit", $t)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("workers.delete", $t)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>

@endsection


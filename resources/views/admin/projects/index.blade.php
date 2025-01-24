@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('projects.create')}}"> Registrar Proyectos</a>

        <br>
        <br>

        <table class="table">
            <thead>
                <th> Nombre </th>
                <th> Descripcion </th>
                <th> Fecha Inicio </th>
                <th> Fecha Fin</th>
                <th> Estado </th>
                <th> Imagen </th>
                <th> Materiales </th>
                <th> Empleados </th>
                <th> Trabajadores </th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ( $projects as $p)
                <tr>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->descripcion}}</td>
                    <td>{{$p->fecha_inicio}}</td>
                    <td>{{$p->fecha_fin}}</td>
                    <td>{{$p->estado}}</td>
                    <td><img src="image/projects/{{$p->imagen}}" width="100" height="80" alt=""></td>
                    <td>
                        <p>{{$p->material->nombre}}</p>
                    </td>
                    <td>
                        <p>{{$p->employee->nombre}}</p>
                    </td>
                    <td>
                        <p>{{$p->worker->nombre}}</p>
                    </td>
                   
                                   
                  
                    <td>
                        <a class="btn btn-info" href="{{route("projects.show", $p)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route("projects.edit", $p)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("projects.delete", $p)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>

@endsection


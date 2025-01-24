@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('employees.create')}}"> Registrar Empleado</a>

        <br>
        <br>

        <table class="table">
            <thead>
                <th> nombre </th>
                <th> apellido </th>
                <th> email </th>
                <th> telefono</th>
                <th> puesto</th>
                <th> salario </th>
                <th> fecha_contratacion </th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ( $employees as $em)
                <tr>
                    <td>{{$em->nombre}}</td>
                    <td>{{$em->apellido}}</td>
                    <td>{{$em->email}}</td>
                    <td>{{$em->telefono}}</td>
                    <td>{{$em->puesto}}</td>
                    <td>{{$em->salario}}</td>
                    <td>{{$em->fecha_contratacion}}</td>
                                   
                  
                    <td>
                        <a class="btn btn-info" href="{{route("employees.show", $em)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route("employees.edit", $em)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("employees.delete", $em)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>

@endsection


@extends('layout.maintemplate')

@section('content')

<div class="container sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"> Proyectos </h1>
            <p class="card-text"> Nombre: {{$project ->nombre}}</p>
            <p class="card-text"> Descripcion: {{$project ->descripcion}}</p>
            <p class="card-text"> Fecha Inicio: {{$project ->fecha_inicio}}</p>
            <p class="card-text"> Fecha Fin: {{$project ->fecha_fin}}</p>
            <p class="card-text"> Estado: {{$project ->estado}}</p>
            <td>Imagen</td>
            <td><img src="{{ asset('image/projects/' . $project->imagen) }}" width="100" height="80" alt="Imagen del proyecto"></td>
            <p class="card-text"> Materiales: {{$project ->material->nombre}}</p>
            <p class="card-text"> Trabajador: {{$project ->employee->nombre}}</p>
            <p class="card-text"> Empleado: {{$project ->worker->nombre}}</p>
            
        </div>
    </div>
</div>



@endsection
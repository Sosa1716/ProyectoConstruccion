@extends('layout.maintemplate')

@section('content')

<div class="container sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"> Detalles del Registro de Empleados </h1>
            <p class="card-text"> Nombre: {{$employee ->nombre}}</p>
            <p class="card-text"> Apellidos: {{$employee ->apellido}}</p>
            <p class="card-text"> Email: {{$employee ->email}}</p>
            <p class="card-text"> Telefono: {{$employee ->telefono}}</p>
            <p class="card-text"> Puesto: {{$employee ->puesto}}</p>
            <p class="card-text"> Salario: {{$employee ->salario}}</p>
            <p class="card-text"> Fecha de Contratación: {{$employee ->fecha_contratacion}}</p>
        </div>
    </div>
</div>


<!--Todo show Image-->


@endsection
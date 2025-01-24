@extends('layout.maintemplate')

@section('content')

<div class="container sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"> Detalles del Trabajador </h1>
            <p class="card-text"> Nombre: {{$worker ->nombre}}</p>
            <p class="card-text"> Posicion: {{$worker ->posicion}}</p>
            <p class="card-text"> Contacto: {{$worker ->contacto}}</p>
            <p class="card-text"> Activo: {{$worker ->activo}}</p>  
        </div>
    </div>
</div>


@endsection
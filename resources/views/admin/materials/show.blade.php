@extends('layout.maintemplate')

@section('content')

<div class="container sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"> Materiales </h1>
            <p class="card-text"> Nombre: {{$material ->nombre}}</p>
            <p class="card-text"> Descripcion: {{$material ->descripcion}}</p>
            <p class="card-text"> Unidad: {{$material ->unidad}}</p>
            <p class="card-text"> Precio Unitario: {{$material ->precio_unitario}}</p>
            <p class="card-text"> Cantidad Disponible: {{$material ->cantidad_disponible}}</p>
            
        </div>
    </div>
</div>



@endsection
@extends('layout.maintemplate')

@section('content')

@include('fragments.formstyles')

<h1>Editar Materiales</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif
    
<div class="container-sm">
    <form action="{{route('materials.update', $material->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <label for=""> Nombre</label >
        <input type="text" name="nombre" value="{{$material->nombre}}">
    
        <label for=""> Descripcion</label>
        <input type="text" name="descripcion" value="{{$material->descripcion}}">
    
        <label for=""> Unidad </label> <br>
        <input type="text" name="unidad" value="{{$material->unidad}}">
    
        <label for=""> Precio </label>
        <input type="number" name="precio_unitario" value="{{$material->precio_unitario}}">
    
        <label for=""> Cantidad Disponible </label>
        <input type="number" name="cantidad_disponible" value="{{$material->cantidad_disponible}}"> 
        
        <button type="submit"> Guardar </button>
       
    </form>
    
</div>

@endsection
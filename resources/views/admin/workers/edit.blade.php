@extends('layout.maintemplate')

@section('content')

@include('fragments.formstyles')

<h1>Editar Trabajador</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif
    
<div class="container-sm">
    <form action="{{route('workers.update', $worker->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <label for=""> Nombre</label >
        <input type="text" name="nombre" value="{{$worker->nombre}}">
    
        <label for=""> Posicion</label>
        <input type="text" name="posicion" value="{{$worker->posicion}}">
    
        <label for=""> Contacto </label> <br>
        <input type="text" name="contacto" value="{{$worker->contacto}}">
    
        <label for=""> Activo </label>
        <input type="text" name="activo" value="{{$worker->activo}}">
    
    
        <button type="submit"> Guardar </button>
       
    </form>
    
</div>

@endsection
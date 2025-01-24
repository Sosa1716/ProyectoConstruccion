@extends('layout.maintemplate')

@section('content')

@include('fragments.formstyles')

<h1>Editar Cliente</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif
    
<div class="container-sm">
    <form action="{{route('employees.update', $employee->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <label for=""> Nombre</label >
        <input type="text" name="nombre" value="{{$employee->nombre}}">
    
        <label for=""> Apellidos</label>
        <input type="text" name="apellido" value="{{$employee->apellido}}">
    
        <label for=""> Email </label> <br>
        <input type="email" name="email" value="{{$employee->email}}">
    
        <label for=""> Telefono </label>
        <input type="number" name="telefono" value="{{$employee->telefono}}">
    
        <label for=""> Puesto </label>
        <input type="text" name="puesto" value="{{$employee->puesto}}"> 
        
        <label for=""> Salario </label>
        <input type="number" name="salario" value="{{$employee->salario}}"> 
    
        <label for=""> Fecha de Creacion </label>
        <input type="date" name="fecha_contratacion" value="{{$employee->fecha_creacion}}"> 
    
        <button type="submit"> Guardar </button>
       
    </form>
    
</div>

@endsection
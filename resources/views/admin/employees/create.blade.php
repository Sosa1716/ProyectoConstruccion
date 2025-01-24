@extends('layout.maintemplate')

@section('content') 

@include('fragments.formstyles')

<div class="container mt-5"> 

    <br>
    <h1 class="text-center mb-4">Registrar Empleados</h1>
    <br>

    @if ($errors->any())
        <div class="alert alert-warning mb-3" role="alert">
           <ul>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
           </ul> 
         </div>
    @endif
       
    <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for=""> Nombre</label>
        <input type="text" name="nombre">
    
        <label for=""> Apellido </label> <br>
        <input type="text" name="apellido">
    
        <label for=""> Email</label>
        <input type="email" name="email">
    
        <label for=""> Telefono </label>
        <input type="number" name="telefono">
        
        <label for=""> Puesto </label>
        <input type="text" name="puesto">
        
        <label for=""> Salario </label>
        <input type="number" name="salario">
        
        <label for=""> Fecha de Contratacion </label>
        <input type="date" name="fecha_contratacion">
        

        
           
        </select> 
    
        <button type="submit"> Registrar </button>
       
    </form>
 </div> 


@endsection
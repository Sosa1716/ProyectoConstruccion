@extends('layout.maintemplate')

@section('content') 

@include('fragments.formstyles')

<div class="container mt-5"> 

    <br>
    <h1 class="text-center mb-4">Registrar Empleado</h1>
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
       
    <form action="{{route('workers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for=""> Nombre</label>
        <input type="text" name="nombre">
    
        <label for=""> Posicion </label> <br>
        <input type="text" name="posicion">
    
        <label for=""> Contacto </label>
        <input type="text" name="contacto">
    
        <label for=""> Activo </label>
        <input type="text" name="activo">
        
        
        </select> 
    
        <button type="submit"> Registrar </button>
       
    </form>
 </div> 


@endsection
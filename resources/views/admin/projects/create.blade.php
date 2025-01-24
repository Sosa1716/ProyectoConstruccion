@extends('layout.maintemplate')

@section('content') 

@include('fragments.formstyles')

<div class="container mt-5"> 

    <br>
    <h1 class="text-center mb-4">Registrar Proyectos</h1>
    <br>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="alert alert-warning mb-3" role="alert">
           <ul>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
           </ul> 
         </div>
    @endif
       
    <!-- Formulario de creación -->
    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" id="nombre" required>
        </div>
    
        <!-- Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
        </div>
    
        <!-- Fecha de inicio -->
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio') }}" class="form-control" id="fecha_inicio" required>
        </div>
    
        <!-- Fecha de fin -->
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Fin</label>
            <input type="date" name="fecha_fin" value="{{ old('fecha_fin') }}" class="form-control" id="fecha_fin" required>
        </div>

        <!-- Estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control" id="estado" required>
                <option value="en_progreso" {{ old('estado') == 'en_progreso' ? 'selected' : '' }}>En Progreso</option>
                <option value="completado" {{ old('estado') == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <label for="">Imagen</label>
        <input type="file" name="imagen"> 

        <!-- Materiales -->
        <div class="mb-3">
            <label for="materiales_id" class="form-label">Materiales</label>
            <select name="materiales_id">
               <option value="">Selecciona. . .</option>
               @foreach ($materials as $material => $id)
               <option value="{{$id}}">{{$material}}</option>
                   
               @endforeach
            </select>
        </div>

        <!-- Empleados -->
        <div class="mb-3">
            <label for="empleados_id" class="form-label">Empleados</label>
            <select name="empleados_id">
                <option value="">Selecciona. . .</option>
               @foreach ($employees as $employee => $id)
               <option value="{{$id}}">{{$employee}}</option>
                   
               @endforeach
            </select>
        </div>

        <!-- Trabajadores -->
        <div class="mb-3">
            <label for="trabajadores_id" class="form-label">Trabajadores</label>
            <select name="trabajadores_id" >
                <option value="">Selecciona. . .</option>
               @foreach ($workers as $worker => $id)
               <option value="{{$id}}">{{$worker}}</option>
                   
               @endforeach
            </select>
        </div>
        
        <!-- Botón de envío -->
        <button type="submit"> Registrar </button>
       
    </form>
</div> 

@endsection

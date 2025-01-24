@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">
            <span style="color: rgb(243, 156, 18);">Gestión</span> 
            <span style="color: rgb(252, 252, 253);">de Proyectos</span>
        </h1>
        
        <a class="btn btn-primary btn-lg" href="{{ route('projects.create') }}">
            <i class="fa-solid fa-folder-plus me-2"></i>Registrar Proyectos
        </a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="table-warning text-center">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Imagen</th>
                <th>Materiales</th>
                <th>Empleados</th>
                <th>Trabajadores</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $p)
                <tr>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->fecha_inicio }}</td>
                    <td>{{ $p->fecha_fin }}</td>
                    <td>{{ $p->estado }}</td>
                    <td><img src="image/projects/{{ $p->imagen }}" width="100" height="80" alt="Imagen del Proyecto"></td>
                    <td>{{ $p->material->nombre ?? 'No asignado' }}</td>
                    <td>{{ $p->employee->nombre ?? 'No asignado' }}</td>
                    <td>{{ $p->worker->nombre ?? 'No asignado' }}</td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm mx-1" href="{{ route('projects.show', $p) }}" title="Ver">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-warning btn-sm mx-1" href="{{ route('projects.edit', $p) }}" title="Editar">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('projects.delete', $p) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este proyecto?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($projects->isEmpty())
        <div class="alert alert-info text-center mt-4">
            No hay proyectos registrados.
        </div>
    @endif
</div>

<style>
    h1 {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .table {
        border-radius: 10px;
        overflow: hidden;
    }

    .table th {
        background-color: #f8d568;
        color: #333;
        text-transform: uppercase;
        font-size: 14px;
    }

    .table-hover tbody tr:hover {
        background-color: #f0f8ff;
    }

    .btn {
        font-size: 14px;
    }

    .btn i {
        margin-right: 4px;
    }

    .alert {
        font-size: 16px;
        font-weight: 500;
    }

    img {
        border-radius: 8px;
    }
</style>

@endsection
@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">
            <span style="color: rgb(243, 156, 18);">Gestión</span> 
            <span style="color: rgb(252, 252, 253);">de Empleados</span>
            <a href="#">
                <i class="fa-solid fa-address-book" style="font-size: 2.5rem; color: #f9950a;"></i>
            </a>
        </h1>
        <a class="btn btn-primary btn-lg" href="{{ route('employees.create') }}">
            <i class="fa-solid fa-user-plus me-2"></i>Registrar Empleado
        </a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="table-warning text-center">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Fecha de Contratación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $em)
                <tr>
                    <td>{{ $em->nombre }}</td>
                    <td>{{ $em->apellido }}</td>
                    <td>{{ $em->email }}</td>
                    <td>{{ $em->telefono }}</td>
                    <td>{{ $em->puesto }}</td>
                    <td>${{ number_format($em->salario, 2) }}</td>
                    <td>{{ $em->fecha_contratacion }}</td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm mx-1" href="{{ route('employees.show', $em) }}" title="Ver">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-warning btn-sm mx-1" href="{{ route('employees.edit', $em) }}" title="Editar">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('employees.delete', $em) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este empleado?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($employees->isEmpty())
        <div class="alert alert-info text-center mt-4">
            No hay empleados registrados.
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
</style>

@endsection

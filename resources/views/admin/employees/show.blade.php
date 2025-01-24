@extends('layout.maintemplate')

@section('content')

<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: rgb(243, 156, 18);">
                Detalles del Registro de Empleados
            </h1>

            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><strong>Nombre:</strong> {{$employee->nombre}}</p>
                    <p class="card-text"><strong>Apellidos:</strong> {{$employee->apellido}}</p>
                    <p class="card-text"><strong>Email:</strong> {{$employee->email}}</p>
                </div>
                <div class="col-md-6">
                    <p class="card-text"><strong>Teléfono:</strong> {{$employee->telefono}}</p>
                    <p class="card-text"><strong>Puesto:</strong> {{$employee->puesto}}</p>
                    <p class="card-text"><strong>Salario:</strong> ${{ number_format($employee->salario, 2) }}</p>
                    <p class="card-text"><strong>Fecha de Contratación:</strong> {{$employee->fecha_contratacion}}</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg" style="background-color: rgb(44, 62, 80); border: none;">
                    <i class="fa-solid fa-arrow-left me-2"></i>Regresar
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        background-color: #fdfdfd;
        padding: 20px;
    }

    .card-text {
        font-size: 18px;
        color: rgb(44, 62, 80);
    }

    .btn {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: rgb(243, 156, 18);
        color: white;
    }
</style>

@endsection

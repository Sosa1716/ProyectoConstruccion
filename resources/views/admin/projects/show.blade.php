@extends('layout.maintemplate')

@section('content')
 
<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: rgb(243, 156, 18);">
                Detalles del Proyecto
            </h1>

            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><strong>Nombre:</strong> {{$project->nombre}}</p>
                    <p class="card-text"><strong>Descripción:</strong> {{$project->descripcion}}</p>
                    <p class="card-text"><strong>Fecha Inicio:</strong> {{$project->fecha_inicio}}</p>
                    <p class="card-text"><strong>Fecha Fin:</strong> {{$project->fecha_fin}}</p>
                </div>

                <div class="col-md-6">
                    <p class="card-text"><strong>Estado:</strong> {{$project->estado}}</p>
                    <p class="card-text"><strong>Materiales:</strong> {{$project->material->nombre}}</p>
                    <p class="card-text"><strong>Trabajador:</strong> {{$project->employee->nombre}}</p>
                    <p class="card-text"><strong>Empleado:</strong> {{$project->worker->nombre}}</p>
                    <p class="card-text"><strong>Imagen:</strong></p>
                    <img src="{{ asset('image/projects/' . $project->imagen) }}" class="img-fluid rounded" style="max-width: 200px;" alt="Imagen del proyecto">
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg" style="background-color: rgb(44, 62, 80); border: none;">
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

    .img-fluid {
        margin-top: 10px;
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

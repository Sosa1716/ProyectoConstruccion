@extends('layout.maintemplate')

@section('content')

<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: rgb(243, 156, 18);">
                Detalles del Trabajador
            </h1>

            <div class="row">
                <div class="col-md-6">
                    <p class="card-text mb-3"> <strong>Nombre:</strong> {{$worker ->nombre}}</p>
                    <p class="card-text mb-3"> <strong>Posición:</strong> {{$worker ->posicion}}</p>
                    <p class="card-text mb-3"> <strong>Contacto:</strong> {{$worker ->contacto}}</p>
                    <p class="card-text mb-3"> <strong>Activo:</strong> {{$worker ->activo}}</p>  
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('workers.index') }}" class="btn btn-primary btn-lg" style="background-color: rgb(44, 62, 80); border: none;">
                    <i class="fa-solid fa-arrow-left me-2"></i>Regresar
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        background-color: #fdfdfd;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-text {
        font-size: 18px;
        color: rgb(44, 62, 80);
        line-height: 1.6;
    }

    .card-body {
        padding: 40px;
    }

    .btn {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        transition: background-color 0.3s ease, transform 0.3s ease;
        padding: 12px 30px;
    }

    .btn:hover {
        background-color: rgb(243, 156, 18);
        color: white;
        transform: translateY(-2px);
    }

    .btn:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.5);
    }

    .card-body h1 {
        font-size: 32px;
        letter-spacing: 1px;
    }

    .container {
        max-width: 1100px;
    }
</style>

@endsection

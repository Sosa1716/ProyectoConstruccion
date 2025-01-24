@extends('layout.maintemplate')

@section('content')

<style>
    body {
        background-color: rgb(44, 62, 80);
        color: #fff;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding-top: 50px;
    }

    h3 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        font-size: 24px;
        color: #fff;
        text-align: center;
        margin-bottom: 40px;
    }

    .button-container {
        display: flex;
        justify-content: space-around;
    }

    .btn-custom {
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .btn-no {
        background-color: rgb(243, 156, 18);
        color: #fff;
    }

    .btn-yes {
        background-color: rgb(192, 57, 43);
        color: #fff;
    }

    .btn-custom:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-custom:focus {
        outline: none;
    }

</style>

<div class="container">
    <h3>¿Estás seguro que quieres eliminar el Material <strong>{{ $material->nombre }}</strong>?</h3>
    
    <div class="button-container">
        <!-- No Button -->
        <form action="{{ route('materials.index') }}">
            <button type="submit" class="btn-custom btn-no">No</button>
        </form>

        <!-- Yes Button -->
        <form action="{{ route('materials.destroy', $material->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn-custom btn-yes">Sí</button>
        </form>
    </div>
</div>

@endsection

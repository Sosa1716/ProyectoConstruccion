@extends('layout.maintemplate')

@section('content') 

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('materials.create')}}"> Registrar Materiales</a>

        <br>
        <br>

        <table class="table">
            <thead>
                <th> nombre </th>
                <th> descripcion </th>
                <th> unidad </th>
                <th> precio_unitario</th>
                <th> cantidad_disponible</th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ( $materials as $m)
                <tr>
                    <td>{{$m->nombre}}</td>
                    <td>{{$m->descripcion}}</td>
                    <td>{{$m->unidad}}</td>
                    <td>{{$m->precio_unitario}}</td>
                    <td>{{$m->cantidad_disponible}}</td>

                    <td>
                        <a class="btn btn-info" href="{{route("materials.show", $m)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route("materials.edit", $m)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("materials.delete", $m)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>

@endsection


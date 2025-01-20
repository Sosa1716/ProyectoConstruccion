<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\Proyecto\StoreRequest;
use App\Http\Requests\Proyecto\UpdateRequest;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate(4);
        return view('admin/proyectos/index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $clientes = Cliente::pluck('id', 'nombre'); // Si el proyecto está relacionado con un cliente
        return view('admin/proyectos/create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Proyecto::create($request->all());
        return to_route('proyectos.index')->with('status', 'Proyecto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        return view('admin/proyectos/show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
       // $clientes = Cliente::pluck('id', 'nombre'); // Si el proyecto tiene un cliente
        return view('admin/proyectos/edit', compact('proyecto', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return to_route('proyectos.index')->with('status', 'Proyecto Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Proyecto $proyecto)
    {
        return view('admin/proyectos/delete', compact('proyecto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return to_route('proyectos.index')->with('status', 'Proyecto Eliminado');
    }
}

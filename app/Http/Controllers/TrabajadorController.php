<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;

use Illuminate\Http\Request;
use App\Http\Requests\Trabajador\StoreRequest;
use App\Http\Requests\Trabajador\UpdateRequest;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::paginate(4);
        return view('admin/trabajadores/index', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $departamentos = Departamento::pluck('id', 'nombre'); // Si el trabajador tiene un departamento
        // $proyectos = Proyecto::pluck('id', 'nombre'); // Si el trabajador está asignado a un proyecto
        return view('admin/trabajadores/create', compact('departamentos', 'proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Trabajador::create($request->all());
        return to_route('trabajadores.index')->with('status', 'Trabajador Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajador $trabajador)
    {
        return view('admin/trabajadores/show', compact('trabajador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajador $trabajador)
    {
       // $departamentos = Departamento::pluck('id', 'nombre'); // Si el trabajador tiene un departamento
        // $proyectos = Proyecto::pluck('id', 'nombre'); // Si el trabajador está asignado a un proyecto
        return view('admin/trabajadores/edit', compact('trabajador', 'departamentos', 'proyectos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Trabajador $trabajador)
    {
        $trabajador->update($request->all());
        return to_route('trabajadores.index')->with('status', 'Trabajador Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Trabajador $trabajador)
    {
        return view('admin/trabajadores/delete', compact('trabajador'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return to_route('trabajadores.index')->with('status', 'Trabajador Eliminado');
    }
}

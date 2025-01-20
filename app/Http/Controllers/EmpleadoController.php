<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

use Illuminate\Http\Request;
use App\Http\Requests\Empleado\StoreRequest;
use App\Http\Requests\Empleado\UpdateRequest;

class EmpleadoController extends Controller
{
    public function index()
    {
        //$empleados = Empleado::paginate(4);
        return view('admin/Empleados/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $departamentos = Departamento::pluck('id', 'nombre'); // Si tienes departamentos relacionados con empleados
        return view('admin/Empleados/create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Empleado::create($request->all());
        return to_route('Empleados.index')->with('status', 'Empleado Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('admin/Empleados/show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        // $departamentos = Departamento::pluck('id', 'nombre'); // Si el empleado tiene un departamento
        return view('admin/Empleados/edit', compact('empleado', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return to_route('Empleados.index')->with('status', 'Empleado Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Empleado $empleado)
    {
        return view('admin/Empleados/delete', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return to_route('Empleados.index')->with('status', 'Empleado Eliminado');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Worker;

use Illuminate\Http\Request;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::paginate(4);
        return view('admin/workers/index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $departamentos = Departamento::pluck('id', 'nombre'); // Si el trabajador tiene un departamento
        // $proyectos = Proyecto::pluck('id', 'nombre'); // Si el trabajador está asignado a un proyecto
        return view('admin/workers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Worker::create($request->all());
        return to_route('workers.index')->with('status', 'Trabajador Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        return view('admin/workers/show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
       // $departamentos = Departamento::pluck('id', 'nombre'); // Si el trabajador tiene un departamento
        // $proyectos = Proyecto::pluck('id', 'nombre'); // Si el trabajador está asignado a un proyecto
        return view('admin/workers/edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Worker $worker)
    {
        $worker->update($request->all());
        return to_route('workers.index')->with('status', 'Trabajador Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Worker $worker)
    {
        return view('admin/workers/delete', compact('worker'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return to_route('workers.index')->with('status', 'Trabajador Eliminado');
    }
}

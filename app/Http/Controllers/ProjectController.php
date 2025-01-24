<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\Project\StoreRequest;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Employee;
use App\Models\Material;
use App\Models\Worker;

class ProjectController extends Controller
{
    public function index()
    {
       $projects = Project::paginate(4);
        return view('admin/projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materials = Material::pluck('id', 'nombre');
        $employees = Employee::pluck('id', 'nombre');
        $workers = Worker::pluck('id', 'nombre');
        return view('admin/projects/create', compact('materials', 'employees', 'workers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        if(isset($data["imagen"])){
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
            $request->imagen->move(public_path("image/projects"), $filename);
        }
        Project::create($data);
        return to_route('projects.index')->with('status', 'Proyecto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin/projects/show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $materials = Material::pluck('id', 'nombre');
        $employees = Employee::pluck('id', 'nombre');
        $workers = Worker::pluck('id', 'nombre');
        return view('admin/projects/edite', compact('project', 'materials', 'employees', 'workers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Project $project)
    {
        $data = $request->all();
        if(isset($data["imagen"])){
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
            $request->imagen->move(public_path("image/projects"), $filename);
        }
        $project->update($data);
        return to_route('projects.index')->with('status', 'Proyecto Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Project $project)
    {
        return view('admin/projects/delete', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('projects.index')->with('status', 'Proyecto Eliminado');
    }
}

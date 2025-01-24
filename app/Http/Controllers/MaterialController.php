<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Material\StoreRequest;
use App\Http\Requests\Material\UpdateRequest;
use App\Models\Material; // Cambiado a singular

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::paginate(4); // Cambiado a singular
        return view('admin/materials/index', compact('materials')); // Nombres de vistas corregidos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::pluck('id', 'name'); // Si estás usando categorías para materiales
        return view('admin/materials/create'); // Nombre de vista corregido
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Material::create($request->all()); // Cambiado a singular
        return to_route('materials.index')->with('status', 'Material Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material) // Cambiado a singular
    {
        
        return view('admin/materials/show', compact('material')); // Nombre de vista corregido
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material) // Cambiado a singular
    {
        return view('admin/materials/edit', compact('material')); // Nombre de vista corregido
    }

    public function update(UpdateRequest $request, Material $material) // Cambiado a singular
    {
        $material->update($request->all());
        return to_route('materials.index')->with('status', 'Material Actualizado');
    }


    public function delete(Material $material)
    {
        return view('admin/materials/delete', compact('material'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material) // Cambiado a singular
    {
        $material->delete();
        return to_route('materials.index')->with('status', 'Material Eliminado');
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Requests\Material\StoreRequest;
use App\Http\Requests\Material\UpdateRequest;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::paginate(4);
        return view('admin/materials/index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $categories = Category::pluck('id', 'name'); // Si estás usando categorías para materiales
        return view('admin/materials/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Material::create($request->all());
        return to_route('materials.index')->with('status', 'Material Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('admin/materials/show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
       // $categories = Category::pluck('id', 'name'); // Si estás usando categorías para materiales
        return view('admin/materials/edit', compact('material', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Material $material)
    {
        $material->update($request->all());
        return to_route('materials.index')->with('status', 'Material Actualizado');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Material $material)
    {
        return view('admin/materials/delete', compact('material'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return to_route('materials.index')->with('status', 'Material Eliminado');
    }
}

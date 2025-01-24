<?php

namespace App\Http\Controllers;

use App\Models\Employee; // Cambiado de Empleado a Employee
use Illuminate\Http\Request;
use App\Http\Requests\Employee\StoreRequest;
use App\Http\Requests\Employee\UpdateRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(4); // Cambiado de $empleados a $employees
        return view('admin/employees/index', compact('employees')); // Cambiado Empleados a employees
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/employees/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Employee::create($request->all()); // Cambiado Empleado a Employee
        return to_route('employees.index')->with('status', 'Employee Registered'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee) // Cambiado Empleado a Employee
    {
        return view('admin/employees/show', compact('employee')); // Cambiado Empleados a employees
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee) // Cambiado Empleado a Employee
    {
        return view('admin/employees/edit', compact('employee')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Employee $employee) // Cambiado Empleado a Employee
    {
        $employee->update($request->all()); // Cambiado $empleado a $employee
        return to_route('employees.index')->with('status', 'Employee Updated'); // Cambiado empleados a employees
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Employee $employee) // Cambiado Empleado a Employee
    {
        return view('admin/employees/delete', compact('employee')); // Cambiado Empleados a employees
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee) // Cambiado Empleado a Employee
    {
        $employee->delete(); // Cambiado $empleado a $employee
        return to_route('employees.index')->with('status', 'Employee Deleted'); // Cambiado empleados a employees
    }
}

<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'email' => 'required|email|max:100', 
            'telefono' => 'required|numeric|digits:10',
            'puesto' => 'required|max:50',
            'salario' => 'required|numeric|min:0',
            'fecha_contratacion' => 'required|date',
        ];
    }
}

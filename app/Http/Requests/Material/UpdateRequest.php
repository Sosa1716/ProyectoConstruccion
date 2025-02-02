<?php

namespace App\Http\Requests\Material;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'descripcion' => 'required|max:100', 
            'unidad' => 'required|max:50', 
            'precio_unitario' => 'required|numeric|min:0', 
            'cantidad_disponible' => 'required|numeric|min:0',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materiales'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'descripcion',
        'unidad',
        'precio_unitario',
        'cantidad_disponible',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'imagen',
        'materiales_id',
        'empleados_id',
        'trabajadores_id',
    ];

    public function material():BelongsTo{
        return $this->belongsTo(Material::class, 'materiales_id');
    }

    public function worker():BelongsTo{
        return $this->belongsTo(Worker::class, 'trabajadores_id');
    }

    public function employee():BelongsTo{
        return $this->belongsTo(Employee::class, 'empleados_id');
    }
}

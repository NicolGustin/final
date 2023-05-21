<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];

    // Relación con la entidad Estudiante
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}

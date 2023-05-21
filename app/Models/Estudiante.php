<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Edad',
        'Email',
        'Telefono',
        'Direccion',
        'Carrera_id',
    ];

    // Relación con el modelo Carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
};

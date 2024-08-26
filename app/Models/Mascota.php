<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';//nombre de la tabla en la base de datos

    //Definir los campos
    protected $fillable = [
        'nombre',
        'fecha_nac',
        'especie',
        'raza',
        'genero',
        'propietario',
    ];
}

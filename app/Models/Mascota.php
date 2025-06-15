<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Mascota extends Model
{
    protected $table = 'mascotas';
    protected $fillable = [
        'nombre',
        'tipo',
        'edad',
        'raza',
        'peso',
        'fecha_adopcion',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    // definicion de tabla a la cual pertenece
    protected $table = 'canchas';
    // definicion de clave primaria
    protected $primaryKey = 'id_cancha';
    // timestamps columnas createAt y deleteAt no implementadas
    public $timestamps = false;
    // // definicion de columnas editables de la tabla
    protected $fillable = [
        'id_usuario',
        'hora',
        'fecha'
    ];

}

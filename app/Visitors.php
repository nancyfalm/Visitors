<?php

namespace Visitors;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    //Modelo de la tabla y datos que recibe el arreglo
    protected $table = 'visitors';
    protected $fillable = array('nombre', 'apellidos', 'foto', 'motivo');
}

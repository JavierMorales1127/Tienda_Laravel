<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ejemplo extends Model

//Definir variables donde
{
    protected $table = 'ejemplo';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
}

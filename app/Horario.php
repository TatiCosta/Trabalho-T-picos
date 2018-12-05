<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['dataHora'];

    public function consulta(){
        return $this->hasMany('App\Consulta');

    }

}

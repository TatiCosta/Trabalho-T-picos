<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['dataHora', 'anotacoes'];

    public function consulta_servicos(){
        return $this->hasMany('App\ConsultaServico');
    }
    //public function horario(){
     //   return $this->belongsTo('App\Horario');
    //}

}

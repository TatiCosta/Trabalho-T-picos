<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultaServico extends Model
{
    protected $fillable = ['consulta_id', 'servico_id'];

    public function servico(){
        return $this->belongsTo('App\Servico');
    }
}

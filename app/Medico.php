<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nome', 'crm', 'cpf', 'telefone', 'cidade', 'bairro', 'rua', 'numero', 'especialidade_id'];

    public function especialidade(){
        return $this->belongsTo('App\Especialidade');
    }
}

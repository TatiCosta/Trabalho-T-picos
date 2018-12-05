<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = ['descricao'];

    
    public function medico(){
        return $this->hasMany('App\Medico');
    }
}

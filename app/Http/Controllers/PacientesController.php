<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\PacienteRequest;

class PacientesController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('filtragem');
        if($filtragem == null){
            $pacientes = Paciente::orderBy('nome')->paginate(2);
        }else{
            $pacientes = Paciente::where('nome', 'like', '%'.$filtragem.'%')->orderBy('nome')->paginate(2);
        }
        
        return view('pacientes.index', ['pacientes'=>$pacientes]);
    }
    public function create(){
        return view('pacientes.create');
    }
    public function store(PacienteRequest $request){
        $novo_paciente = $request->all();
        Paciente::create($novo_paciente);
        return redirect()->route('pacientes');
    }
    public function destroy($id){
        Paciente::find($id)->delete();
        return redirect()->route('pacientes');
        
    }
    public function edit($id){
        $paciente = Paciente::find($id);
        return view('pacientes.edit', compact('paciente'));
    }
    public function update(PacienteRequest $request,$id){
        $paciente = Paciente::find($id)->update($request->all());
        return redirect()->route('pacientes');
    
    }
}


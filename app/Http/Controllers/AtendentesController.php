<?php

namespace App\Http\Controllers;

use App\Atendente;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\AtendenteRequest;

class AtendentesController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('filtragem');
        if($filtragem == null){
            $atendentes = Atendente::orderBy('nome')->paginate(2);
        }else{
            $atendentes = Atendente::where('nome', 'like', '%'.$filtragem.'%')->orderBy('nome')->paginate(2);
        }
        
        return view('atendentes.index', ['atendentes'=>$atendentes]);
    }
    public function create(){
        return view('atendentes.create');
    }
    public function store(AtendenteRequest $request){
        $novo_atendente = $request->all();
        Atendente::create($novo_atendente);
        return redirect()->route('atendentes');
    }
    public function destroy($id){
        try {
            Atendente::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>'null');
        }catch (\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro', 'msg'=> $e->getMessage());
        }catch (\PDOException $e){
            $ret = array('status'=>'erro', 'msg'=> $e->getMessage());
        }
        return $ret;
        
    }
    public function edit($id){
        $atendente = Atendente::find($id);
        return view('atendentes.edit', compact('atendente'));
    }
    public function update(AtendenteRequest $request,$id){
        $atendente = Atendente::find($id)->update($request->all());
        return redirect()->route('atendentes');
    
    }
}

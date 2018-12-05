<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\ConsultaServico;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\ConsultaRequest;

class ConsultasController extends Controller
{
    public function index(){
        $consultas = Consulta::paginate(2);
        return view('consultas.index', ['consultas'=>$consultas]);
    }
    public function create(){
        return view('consultas.create');
    }

    public function store(ConsultaRequest $request){
        $nova_consulta = $request->all();
        Consulta::create($nova_consulta);

        return redirect()->route('consultas');
    }

    public function destroy($id){
        Consulta::find($id)->delete();
        return redirect()->route('consultas');
    }
    public function edit($id){
        $consulta = Consulta::find($id);
        return view('consultas.edit', compact('consulta'));
    }
    public function update(ConsultaRequest $request,$id){
        Consulta::find($id)->update($request->all());
        return redirect()->route('consultas');
    
    }
    public function createmaster(){
        return view('consultas.masterdetail');
    }
    public function masterdetail(Request $request){
        $consulta = Consulta::create(['dataHora' => $request->get('dataHora'), 'anotacoes' => $request->get('anotacoes')]);
                    
        $itens = $request->itens;
        foreach($itens as $key => $value) {
            ConsultaServico::create(['consulta_id' => $consulta->id,
                                        'servico_id' => $itens[$key]]
                                    );
        
        }
        return redirect()->route('consultas');
        
    }
}

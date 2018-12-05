<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\ServicoRequest;

class ServicosController extends Controller
{
    public function index(){
        $servicos = Servico::orderBy('descricao')->paginate(2);
        return view('servicos.index', ['servicos'=>$servicos]);
    }
    public function create(){
        return view('servicos.create');
    }
    public function store(ServicoRequest $request){
        $novo_servico = $request->all();
        Servico::create($novo_servico);
        return redirect()->route('servicos');
    }
    public function destroy($id){
        Servico::find($id)->delete();
        return redirect()->route('servicos');
        
    }
    public function edit($id){
        $servico = Servico::find($id);
        return view('servicos.edit', compact('servico'));
    }
    public function update(ServicoRequest $request,$id){
        $servico = Servico::find($id)->update($request->all());
        return redirect()->route('servicos');
    
    }
}
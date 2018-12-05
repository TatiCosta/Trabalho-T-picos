<?php

namespace App\Http\Controllers;

use App\Especialidade;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\EspecialidadeRequest;

class EspecialidadesController extends Controller
{
    public function index(Request $filtro){
        $especialidades = Especialidade::paginate(2);        
        return view('especialidades.index', ['especialidades'=>$especialidades]);
    }
    public function create(){
        return view('especialidades.create');
    }
    public function store(EspecialidadeRequest $request){
        $nova_especialidade = $request->all();
        Especialidade::create($nova_especialidade);
        return redirect()->route('especialidades');
    }
    public function destroy($id){
        Especialidade::find($id)->delete();
        return redirect()->route('especialidades');
        
    }
    public function edit($id){
        $especialidade = Especialidade::find($id);
        return view('especialidades.edit', compact('especialidade'));
    }
    public function update(EspecialidadeRequest $request,$id){
        $especialidade = Especialidade::find($id)->update($request->all());
        return redirect()->route('especialidades');
    
    }
}

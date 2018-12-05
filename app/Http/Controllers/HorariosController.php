<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Http\Requests\HorarioRequest;

class HorariosController extends Controller
{
    public function index(){
        $horarios = Horario::paginate(2);
        return view('horarios.index', ['horarios'=>$horarios]);
    }
    public function create(){
        return view('horarios.create');
    }
    public function store(HorarioRequest $request){
        $novo_horario = $request->all();
        Horario::create($novo_horario);
        return redirect()->route('horarios');
    }
    public function destroy($id){
        Horario::find($id)->delete();
        return redirect()->route('horarios');
        
    }
    public function edit($id){
        $horario = Horario::find($id);
        return view('horarios.edit', compact('horario'));
    }
    public function update(HorarioRequest $request,$id){
        $horario = Horario::find($id)->update($request->all());
        return redirect()->route('horarios');
    
    }
}

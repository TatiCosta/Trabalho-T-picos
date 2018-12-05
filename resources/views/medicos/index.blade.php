@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Médicos</h3>
    {!! Form::open(['name'=>'form_name', 'route'=>'medicos']) !!}
        <div class="form form-inline">
            <div class="input-group">
			
                <input type="text" name="filtragem" class="form-control"
                    style="width:100% !important;" placeholder="Pesquisa...">
                <span class="input-group-btn">
				
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                </span>
            </div>
            <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('medicos.create') !!}">Adicionar Novo</a>
            </h1>
        </div>
        {!! Form::close() !!}
       <br>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th> 
                        <th>CRM</th> 
                        <th>CPF</th>
                        <th>Esecialidade</th>
                        <th>Telefone</th>                
                        <th>Cidade</th>
                        <th>Bairro</th>                
                        <th>Rua</th>
                        <th>Número</th>         
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($medicos as $med)
                        <tr>
                            <td>{{$med->nome}}</td>
                            <td>{{$med->crm}}</td>
                            <td>{{$med->cpf}}</td>
                            <td>{{$med->especialidade->descricao}}</td>
                            <td>{{$med->telefone}}</td>
                            <td>{{$med->cidade}}</td>
                            <td>{{$med->bairro}}</td>
                            <td>{{$med->rua}}</td>
                            <td>{{$med->numero}}</td>
                            <td>
                                <a href="{{route('medicos.edit', ['id'=>$med->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('medicos.destroy', ['id'=>$med->id])}}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$medicos->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"medicos"
@endsection
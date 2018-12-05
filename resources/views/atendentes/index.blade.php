@extends('adminlte::default')


@section('content')
<div class="container-fluid">
    <h3>Atendentes</h3>
    {!! Form::open(['name'=>'form_name', 'route'=>'atendentes']) !!}
        <div class="form form-inline">
            <div class="input-group">
			
                <input type="text" name="filtragem" class="form-control"
                    style="width:100% !important;" placeholder="Pesquisa...">
                <span class="input-group-btn">
				
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                </span>
            </div>
            <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('atendentes.create') !!}">Adicionar Novo</a>
            </h1>
        </div>
        {!! Form::close() !!}
       <br>
       <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th> 
                        <th>CPF</th>
                        <th>Telefone</th>                
                        <th>Cidade</th>
                        <th>Bairro</th>                
                        <th>Rua</th>
                        <th>Número</th>         
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($atendentes as $ate)
                        <tr>
                            <td>{{$ate->nome}}</td>
                            <td>{{$ate->cpf}}</td>
                            <td>{{$ate->telefone}}</td>
                            <td>{{$ate->cidade}}</td>
                            <td>{{$ate->bairro}}</td>
                            <td>{{$ate->rua}}</td>
                            <td>{{$ate->numero}}</td>
                            <td>
                                <a href="{{route('atendentes.edit', ['id'=>$ate->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href= "#" onClick="return ConfirmaExclusao({{$ate->id}})" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$atendentes->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"atendentes"
@endsection
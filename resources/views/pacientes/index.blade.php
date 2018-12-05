@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Pacientes</h3>
    {!! Form::open(['name'=>'form_name', 'route'=>'pacientes']) !!}
        <div class="form form-inline">
            <div class="input-group">
			
                <input type="text" name="filtragem" class="form-control"
                    style="width:100% !important;" placeholder="Pesquisa...">
                <span class="input-group-btn">
				
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                </span>
            </div>
            <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('pacientes.create') !!}">Adicionar Novo</a>
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
                        <th>Data de Nascimento</th>  
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pacientes as $pac)
                        <tr>
                            <td>{{$pac->nome}}</td>
                            <td>{{$pac->cpf}}</td>
                            <td>{{$pac->telefone}}</td>
                            <td>{{$pac->cidade}}</td>
                            <td>{{$pac->bairro}}</td>
                            <td>{{$pac->rua}}</td>
                            <td>{{$pac->numero}}</td>
                            <td>{{$pac->dataDeNascimento}}</td>
                            <td>
                                <a href="{{route('pacientes.edit', ['id'=>$pac->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('pacientes.destroy', ['id'=>$pac->id])}}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pacientes->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"pacientes"
@endsection

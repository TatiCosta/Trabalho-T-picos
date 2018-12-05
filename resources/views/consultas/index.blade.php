@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Consultas</h3>
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('consultas.createmaster') !!}">Adicionar Novo</a>
        <br>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Data e Hora</th>
                        <th>Anotações</th>
                        <th>Serviços</th>
                        <th>Ação</th>  
                    </tr>
                </thead>

                <tbody>
                    @foreach($consultas as $con)
                        <tr>
                            <td>{{$con->dataHora}}</td>
                            <td>{{$con->anotacoes}}</td>
                            <td>
                            @foreach( $con->consulta_servicos as $ser)
                                <ul><li>{{$ser->servico->descricao}}</li></ul>
                            @endforeach     
                            </td>
                            <td>
                                <a href="{{route('consultas.edit', ['id'=>$con->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('consultas.destroy', ['id'=> $con->id]) }}" 
                                class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$consultas->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"consultas"
@endsection
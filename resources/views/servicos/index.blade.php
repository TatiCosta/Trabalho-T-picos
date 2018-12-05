@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Serviços</h3>
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('servicos.create') !!}">Adicionar Novo</a>
        <br>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Ação</th>     
                    </tr>
                </thead>

                <tbody>
                    @foreach($servicos as $ser)
                        <tr>
                            <td>{{$ser->descricao}}</td>
                            <td>{{$ser->valor}}</td>
                            <td>
                                <a href="{{route('servicos.edit', ['id'=>$ser->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('servicos.destroy', ['id'=> $ser->id]) }}" 
                                class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$servicos->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"servicos"
@endsection
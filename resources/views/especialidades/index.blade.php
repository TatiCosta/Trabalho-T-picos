@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Horarios</h3>
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('especialidades.create') !!}">Adicionar Novo</a>
        <br>
        
        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Especialidade</th>  
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($especialidades as $esp)
                        <tr>
                            <td>{{$esp->descricao}}</td>
                            <td>
                                <a href="{{route('especialidades.edit', ['id'=>$esp->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('especialidades.destroy', ['id'=> $esp->id]) }}" 
                                class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$especialidades->links()}}
        </div>
    </div>
    <br>
</div>
@endsection

@section('table-delete')
"especialidades"
@endsection
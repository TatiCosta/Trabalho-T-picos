@extends('adminlte::default')

@section('content')
<div class="container-fluid">
    <h3>Horarios</h3>
    <div class="box">
        <div class="box-header">
            <form action="" method="POST" class="form form-inline">
                <input type="text" name="id" class="form-control" placeholder="ID">

                <button type="submit" class="btn btn-primary">Pesquisar</button>
                
                <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('horarios.create') !!}">Adicionar Novo</a>
                </h1>
                <br>
            </form>
            
        </div>

        <div class="box-body">
            <table class="table table-strped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Data e hora</th>  
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($horarios as $hor)
                        <tr>
                            <td>{{$hor->dataHora}}</td>
                            <td>
                                <a href="{{route('horarios.edit', ['id'=>$hor->id])}}" class="btn-sm btn-success">Editar</a> 
                                <a href="{{route('horarios.destroy', ['id'=> $hor->id]) }}" 
                                class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$horarios->links()}}
    <br>
</div>
@endsection

@section('table-delete')
"horarios"
@endsection
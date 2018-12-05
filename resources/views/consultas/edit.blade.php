@extends('adminlte::default')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Consulta</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["consultas.update", $consulta->id], 'method'=>'put'])!!}
    
    <div class="form-group">
                    {!! Form::label('dataHora', 'Data e Hora: ') !!}
                    {!! Form::dateTime('dataHora', $consulta->dataHora, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('anotacoes', 'Anotações: ') !!}
                    {!! Form::text('anotacoes', $consulta->anotacoes, ['class'=>'form-control', 'require']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('servico_id', 'Serviço:') !!}
                    {{ Form::select('servico_id', 
                    \App\Servico::orderBy('descricao')->pluck('descricao','id')->toArray(), $consulta->servico_id,['class'=>'form-control']) }}
                </div>

            <div class="form-group">
                {!! Form::submit('Editar Horário', ['class'=>'btn btn-primary'])!!}
            </div>
    {!! Form::close()!!}
    
</div>
@endsection
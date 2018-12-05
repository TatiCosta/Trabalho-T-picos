@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Nova Consulta</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'consultas/store'])!!}
        <div class="form-group">
            {!! Form::label('horario_id', 'Data e Hora:') !!}
            {{ Form::select('horario_id', 
            \App\Horario::orderby('dataHora')->pluck('dataHora', 'id')->toArray(), null, ['class'=>'form-control']) }}
            </div>
            
            <div class="form-group">
            {!! Form::label('anotacoes', 'Anotações:') !!}
            {!! Form::textarea('anotacoes', null, ['class'=>'form-control', 'require']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::submit('Agendar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
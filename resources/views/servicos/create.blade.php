@extends('adminlte::default')

@section('content')
<div class="box">
        <div class="box-header">
        <h3>Novo Serviço</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'servicos.store']) !!}

            <div class="form-group">
            {!! Form::label('descricao', 'Descrição:' ) !!}
            {!! Form::text('descricao', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group ">
            {!! Form::label('valor', 'Valor' ) !!}
            {!! Form::number('valor', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group ">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection
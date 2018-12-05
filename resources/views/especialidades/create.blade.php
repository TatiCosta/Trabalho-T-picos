@extends('adminlte::default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Nova Especialidade</h3>
        </div>

    <div class="box-body">
       
    @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'especialidades/store'])!!}

            <div class="form-group">
            {!! Form::label('descricao', 'Especialidade:') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            

        {!! Form::close() !!}

    </div>
@endsection
@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Médico</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'medicos.store']) !!}
        <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:' ) !!}
                {!! Form::text('nome', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('crm', 'CRM:') !!}
                {!! Form::text('crm', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('especialidade_id', 'Especialidade:') !!}
                {{ Form::select('especialidade_id', 
                \App\Especialidade::orderby('descricao')->pluck('descricao', 'id')->toArray(), null, ['class'=>'form-control']) }}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::number('telefone', null, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Número:') !!}
                {!! Form::number('numero', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-12">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                </div>

        {!! Form::close() !!}

    </div>
@endsection
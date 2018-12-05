@extends('adminlte::default')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Paciente: {{$paciente->nome}}</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["pacientes.update", $paciente->id], 'method'=>'put'])!!}
    
    <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:' ) !!}
                {!! Form::text('nome', $paciente->nome, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', $paciente->cpf, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::number('telefone', $paciente->telefone, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', $paciente->cidade, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', $paciente->bairro, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', $paciente->rua, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Número:') !!}
                {!! Form::number('numero', $paciente->numero, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('dataDeNascimento', 'Data de Nascimento:') !!}
                {!! Form::date('dataDeNascimento', $paciente->dataDeNascimento, ['class'=>'form-control']) !!}
                </div>


            <div class="form-group col-sm-12">
                {!! Form::submit('Editar Paciente', ['class'=>'btn btn-primary'])!!}
            </div>
    {!! Form::close()!!}
    
</div>
@endsection
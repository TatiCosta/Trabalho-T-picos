@extends('adminlte::default')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Atendente: {{$atendente->nome}}</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["atendentes.update", $atendente->id], 'method'=>'put'])!!}
    
    <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:' ) !!}
                {!! Form::text('nome', $atendente->nome, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', $atendente->cpf, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::number('telefone', $atendente->telefone, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', $atendente->cidade, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', $atendente->bairro, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', $atendente->rua, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Número:') !!}
                {!! Form::number('numero', $atendente->numero, ['class'=>'form-control']) !!}
                </div>

            <div class="form-group col-sm-12">
                {!! Form::submit('Editar Atendente', ['class'=>'btn btn-primary'])!!}
            </div>
    {!! Form::close()!!}
    
</div>
@endsection
@extends('adminlte::default')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Médico: {{$medico->nome}}</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["medicos.update", $medico->id], 'method'=>'put'])!!}
    
    <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:' ) !!}
                {!! Form::text('nome', $medico->nome, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('crm', 'CRM:') !!}
                {!! Form::text('crm', $medico->crm, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf', $medico->cpf, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('especialidade_id', 'Especialidade:') !!}
                {{ Form::select('especialidade_id', 
                \App\Especialidade::orderby('descricao')->pluck('descricao', 'id')->toArray(), null, ['class'=>'form-control']) }}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::number('telefone', $medico->telefone, ['class'=>'form-control', 'require']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', $medico->cidade, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', $medico->bairro, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', $medico->rua, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Número:') !!}
                {!! Form::number('numero', $medico->numero, ['class'=>'form-control']) !!}
                </div>


            <div class="form-group col-sm-12">
                {!! Form::submit('Editar Medico', ['class'=>'btn btn-primary'])!!}
            </div>
    {!! Form::close()!!}
    
</div>
@endsection
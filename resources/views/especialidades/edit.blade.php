@extends('adminlte::default')

@section('content')
<div class="conteiner-fluid">
    <h3> Editando Especialidade</h3>
    
    @if($errors->any())
        <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ["especialidades.update", $especialidade->id], 'method'=>'put'])!!}
    
    <div class="form-group">
            {!! Form::label('descricao', 'Especialidade:') !!}
            {!! Form::text('descricao', $especialidade -> descricao, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Horário', ['class'=>'btn btn-primary'])!!}
            </div>
    {!! Form::close()!!}
    
</div>
@endsection
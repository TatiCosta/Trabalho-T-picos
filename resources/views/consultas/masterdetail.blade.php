@extends ('adminlte::default')

@section('content')
    <div class= "container-fluid">
        <h3>Nova Consulta</h3>

        @if ($errors->any())
            <ul class='alert alert-danger'>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
            {!! Form::open(['route' => 'consultas.masterdetail']) !!}  

                <div class="form-group">
                    {!! Form::label('dataHora', 'Data e Hora: ') !!}
                    {!! Form::dateTime('dataHora', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('anotacoes', 'Anotações: ') !!}
                    {!! Form::text('anotacoes', null, ['class'=>'form-control', 'require']) !!}
                </div>
                <hr />

                <h4>Serviço</h4>

                <div class="input_fields_wrap"></div>
                <br>

                <button style="float:right;" class="add_field_button btn btn-success">Adicionar Serviço</button>

                <br>

                <hr />

                <div class="form-group">
                    {!! Form::submit('Criar Consulta', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
    </div>
@endsection

@section('dyn_scripts')
<script>
    $(document).ready(function(){
        var wrapper = $(".input_fields_wrap");
        var add_button = $(".add_field_button");
        var x = 0;
        $(add_button).click(function(e){
            x++;
            var newField = 
            `<div>
                <div style="width:94%; float:left" id="servico">
                    {!! Form::select("itens[]",
                        \App\Servico::orderBy("descricao")->pluck("descricao", "id")->toArray(),
                        null,
                        ["class"=>"form-control", "required",
                            "placeholder"=>"Selecione um serviço"])
                    !!}
                </div>
                <button type="button" class="remove_field btn btn-danger btn-circle">
                    <i class="fa fa-times"></i>
                </button>
            </div>`;
            $(wrapper).append(newField);            
        });

        $(wrapper).on("click",".remove_field", function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
@endsection
<!-- Dataconsulta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataConsulta', 'Data da Consulta:') !!}
    {!! Form::date('dataConsulta', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpaciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPaciente', 'Id Paciente:') !!}
    {!! Form::number('idPaciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMedico', 'Id Medico:') !!}
    {!! Form::number('idMedico', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricaoconsulta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricaoConsulta', 'Informações:') !!}
    {!! Form::textarea('descricaoConsulta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('consultas.index') !!}" class="btn btn-default">Cancelar</a>
</div>

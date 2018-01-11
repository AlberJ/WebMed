<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id Consulta:') !!}
    <p>{!! $consulta->id !!}</p>
</div>

<!-- Dataconsulta Field -->
<div class="form-group">
    {!! Form::label('dataConsulta', 'Data da Consulta:') !!}
    <p>{!! $consulta->dataConsulta !!}</p>
</div>

<!-- Idpaciente Field -->
<div class="form-group">
    {!! Form::label('idPaciente', 'Id Paciente:') !!}
    <p>{!! $consulta->idPaciente !!}</p>
</div>

<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idMedico', 'Id Medico:') !!}
    <p>{!! $consulta->idMedico !!}</p>
</div>

<!-- Descricaoconsulta Field -->
<div class="form-group">
    {!! Form::label('descricaoConsulta', 'Informações:') !!}
    <p>{!! $consulta->descricaoConsulta !!}</p>
</div>

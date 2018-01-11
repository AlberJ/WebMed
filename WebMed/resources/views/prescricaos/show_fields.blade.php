<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id Prescrição:') !!}
    <p>{!! $prescricao->id !!}</p>
</div>

<!-- Idconsulta Field -->
<div class="form-group">
    {!! Form::label('idConsulta', 'Id Consulta:') !!}
    <p>{!! $prescricao->idConsulta !!}</p>
</div>

<!-- Idmedicamento Field -->
<div class="form-group">
    {!! Form::label('idMedicamento', 'Id Medicamento:') !!}
    <p>{!! $prescricao->idMedicamento !!}</p>
</div>

<!-- Idexame Field -->
<div class="form-group">
    {!! Form::label('idExame', 'Id Exame:') !!}
    <p>{!! $prescricao->idExame !!}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('Comentario', 'Informações:') !!}
    <p>{!! $prescricao->Comentario !!}</p>
</div>

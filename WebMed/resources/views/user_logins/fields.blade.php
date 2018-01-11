<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'CPF:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Senha:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Tipousuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipousuario', 'Tipo Usuário:') !!}
    {!! Form::text('tipousuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ativo', 'Ativo:') !!}
    {!! Form::number('ativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Criar Usuário', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userLogins.index') !!}" class="btn btn-default">Cancelar</a>
</div>

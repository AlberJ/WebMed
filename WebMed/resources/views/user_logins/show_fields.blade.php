<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userLogin->id !!}</p>
</div>

<!-- Cpf Field -->
<div class="form-group">
    {!! Form::label('cpf', 'CPF:') !!}
    <p>{!! $userLogin->cpf !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Senha:') !!}
    <p>{!! $userLogin->password !!}</p>
</div>

<!-- Tipousuario Field -->
<div class="form-group">
    {!! Form::label('tipousuario', 'Tipo Usuário:') !!}
    <p>{!! $userLogin->tipousuario !!}</p>
</div>

<!-- Ativo Field -->
<div class="form-group">
    {!! Form::label('ativo', 'Ativo:') !!}
    <p>{!! $userLogin->ativo !!}</p>
</div>

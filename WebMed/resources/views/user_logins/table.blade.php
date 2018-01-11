<table class="table table-responsive" id="userLogins-table">
    <thead>
        <tr>
            <th>CPF</th>
        <th>Senha</th>
        <th>Tipo Usuário</th>
        <th>Ativo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userLogins as $userLogin)
        <tr>
            <td>{!! $userLogin->cpf !!}</td>
            <td>{!! $userLogin->password !!}</td>
            <td>{!! $userLogin->tipousuario !!}</td>
            <td>{!! $userLogin->ativo !!}</td>
            <td>
                {!! Form::open(['route' => ['userLogins.destroy', $userLogin->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userLogins.show', [$userLogin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userLogins.edit', [$userLogin->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

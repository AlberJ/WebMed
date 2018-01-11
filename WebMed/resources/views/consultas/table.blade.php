<table class="table table-responsive" id="consultas-table">
    <thead>
        <tr>
            <th>Data Consulta</th>
        <th>Id Paciente</th>
        <th>Id Medico</th>
        <th>Informações</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($consultas as $consulta)
        <tr>
            <td>{!! $consulta->dataConsulta !!}</td>
            <td>{!! $consulta->idPaciente !!}</td>
            <td>{!! $consulta->idMedico !!}</td>
            <td>{!! $consulta->descricaoConsulta !!}</td>
            <td>
                {!! Form::open(['route' => ['consultas.destroy', $consulta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('consultas.show', [$consulta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('consultas.edit', [$consulta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

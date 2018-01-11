<table class="table table-responsive" id="prescricaos-table">
    <thead>
        <tr>
            <th>Id Consulta</th>
        <th>Id Medicamento</th>
        <th>Id Exame</th>
        <th>Informações</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prescricaos as $prescricao)
        <tr>
            <td>{!! $prescricao->idConsulta !!}</td>
            <td>{!! $prescricao->idMedicamento !!}</td>
            <td>{!! $prescricao->idExame !!}</td>
            <td>{!! $prescricao->Comentario !!}</td>
            <td>
                {!! Form::open(['route' => ['prescricaos.destroy', $prescricao->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prescricaos.show', [$prescricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prescricaos.edit', [$prescricao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

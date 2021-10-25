<div class="table-responsive">
    <table class="table hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Instituição de ensino</th>
                <th>Nível</th>
                <th>Sério</th>
                <th>Turno</th>
                <th>Ano</th>
                <th>Editar/Excluir</th>
            </tr>
            <tbody>
                @if (count($turmas) > 0)
                    @foreach ($turmas as $turma)
                        <tr>
                            <td>{{ $turma->id }}</td>
                            <td>{{ $turma->nome }}</td>
                            <td>{{ $turma->nivel }}</td>
                            <td>{{ $turma->serie }}</td>
                            <td>{{ $turma->turno }}</td>
                            <td>{{ $turma->ano }}</td>
                            <td>
                                <a href="{{ route('turmas.edit',$turma->id) }}" class="btn btn-secondary btn-sm"><i class="far fa-edit"></i></a>
                                <a href="{{ route('turmas.delete', $turma->id) }}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="5" style="text-align: center;"><h6>Nenhum registro encontrado</h6></td>
                </tr>
                @endif
                
                
            </tbody>
        </thead>
    </table>
</div>
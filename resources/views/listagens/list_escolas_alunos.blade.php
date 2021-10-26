<div class="table-responsive">
    <table class="table table-hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Turma</th>
                <th>Consultar</th>
            </tr>
        </thead>
        <tbody>
            @if (count($matriculas) >= 1)
                @foreach ($matriculas as $matricula )
                <tr>
                    <td>{{ $matricula->id }}</td>
                    <td>{{ $matricula->nome }}</td>
                    <td>{{ $matricula->serie }}º {{ $matricula->nivel }} {{ $matricula->turno }} </td>
                    <td><a href="{{ route('alunos.edit',$matricula->id_aluno) }}) }}" class="btn btn-dark btn-sm"><i class="far fa-edit"></i></a></td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4" style="text-align: center">Nenhum aluno matriculado</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

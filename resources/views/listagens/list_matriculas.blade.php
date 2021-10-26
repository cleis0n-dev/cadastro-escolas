<div class="table-responsive">
    <table class="table table-hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Instituição</th>
                <th>Turma</th>
                <th>Editar/Excluir</th>
            </tr>
        </thead>
        <tbody>
            @if(count($matriculas) > 0)
                @foreach ($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->nome }}</td>
                    <td>{{ $matricula->escola }}</td>
                    <td>{{ $matricula->serie }}º {{ $matricula->nivel }} {{ $matricula->turno }}</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{ $matricula->id }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                    <!-- Button trigger modal -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $matricula->id }}" tabindex="-1" aria-labelledby="{{ $matricula->id }}-Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="{{ $matricula->id }}-Label">{{ $matricula->id }} - {{ $matricula->nome }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <h6><i class="fas fa-exclamation-triangle text-danger mx-3"></i>Deseja realmente excluir esse registro?</h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                        <a href="{{ route('matricula.delete',$matricula->id) }}" class="btn btn-danger">Sim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Modal -->
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4" style="text-align: center"><h6>Nenhuma matrícula encontrada</h6></td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Instituição de ensino</th>
                <th>Nível</th>
                <th>Série</th>
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
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{ $turma->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <a href="{{ route('matricula.create',$turma->id,$turma->escola_id) }}" class="btn btn-primary btn-sm"><i class="fas fa-users"></i></a>
                            </td>
                            <!-- Modal -->
                                <div class="modal fade" id="modal{{ $turma->id }}" tabindex="-1" aria-labelledby="{{ $turma->id }}-Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="{{ $turma->id }}-Label">{{ $turma->id }} - {{ $turma->serie }}º - turno: {{ $turma->turno }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <h6><i class="fas fa-exclamation-triangle text-danger mx-1"></i>Todas as referências serão excluídas. Deseja realmente continuar?</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                <a href="{{ route('turmas.delete', $turma->id) }}" class="btn btn-danger">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--Modal -->
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

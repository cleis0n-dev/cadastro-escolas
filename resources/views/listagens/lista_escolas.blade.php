<div class="table-responsive">
    <table class="table table-hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Instituição</th>
                <th>Endereço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @if (count($escola) >= 1)
                @foreach ($escola as $escola )
            <tr>
                <td>{{ $escola->id }}</td>
                <td>{{ $escola->nome }}</td>
                <td>{{ $escola->endereço }}</td>
                <td>
                    <div class="col">
                        <a href="{{ route('escolas.edit',$escola->id) }}" class="btn btn-secondary btn-sm"><i class="far fa-edit"></i></a>
                        <a href="{{ route('turmas.create',$escola->id) }}" class="btn btn-primary btn-sm"><i class="far fa-address-card"></i></a>
                        <a href="{{ route('escolas.alunos',$escola->id) }}" class="btn btn-info btn-sm"><i class="fas fa-users"></i></a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{ $escola->id }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div> 
                </td>
                <!-- Modal -->
                <div class="modal fade" id="modal{{ $escola->id }}" tabindex="-1" aria-labelledby="{{ $escola->id }}-Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ $escola->id }}-Label">{{ $escola->id }} - {{ $escola->nome }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <h6><i class="fas fa-exclamation-triangle text-danger mx-1"></i>Todas as referências serão excluídas. Deseja realmente continuar?</h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                <a href="{{ route('escolas.delete',$escola->id) }}" class="btn btn-danger">Sim</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal -->
            </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4" style="text-align: center;"><h6>Nenhuma escola cadastrada</h6></td>
            </tr>
                
            @endif
            
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <h6>Pesquisar Instituição de Ensino</h6>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

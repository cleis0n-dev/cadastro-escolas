<div class="table-responsive">
    <table class="table-hover" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>E-mail</td>
                <td>Data de Nascimento</td>
                <td>Gênero</td>
                <td>Editar/Excluir</td>
            </tr>
        </thead>
        <tbody>
            @if (count($aluno) > 0)
                @foreach($aluno as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($aluno->dt_nascimento)) }}</td>
                    <td>{{ $aluno->genero }}</td>
                    <td>
                        <div class="col-12">
                            <a href="{{ route('alunos.edit',$aluno->id) }}" class="btn btn-secondary btn-sm"><i class="far fa-edit"></i></a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{ $aluno->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{ $aluno->id }}" tabindex="-1" aria-labelledby="{{ $aluno->id }}-Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="{{ $aluno->id }}-Label">{{ $aluno->id }} - {{ $aluno->nome }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <h6><i class="fas fa-exclamation-triangle text-danger mx-1"></i>Todas as referências serão excluídas. Deseja realmente continuar?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <a href="{{ route('alunos.delete',$aluno->id) }}" class="btn btn-danger">Sim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--Modal -->
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align: center"><h6>Nenhum estudante cadastrado</h6></td>
                </tr>
            @endif
            
        </tbody>
    </table>
</div>
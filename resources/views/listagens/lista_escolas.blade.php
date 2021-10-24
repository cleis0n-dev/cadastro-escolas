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
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-users"></i></a>
                        <a href="{{ route('escolas.delete',$escola->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                    </div> 
                </td>
            </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4" style="text-align: center;"><h6>Nenhuma Escola Cadastrada</h6></td>
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
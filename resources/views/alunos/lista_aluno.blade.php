@extends('layouts.main')

@section('content_header')
    <h1>Lista de Alunos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
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
                                    <a href="{{ route('alunos.delete',$aluno->id) }}" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td><h6>Nenhum registro cadastrado</h6></td>
                        </tr>
                    @endif
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
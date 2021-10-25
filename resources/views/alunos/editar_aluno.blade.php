@extends('layouts/main')

@section('content_header')
    <h1>Alterar cadastro de Aluno</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('alunos.update',$aluno->id) }}" method="post">
            @method('PUT')
            @csrf
                @include('formularios.aluno')
        </form>
    </div>
</div>

@endsection
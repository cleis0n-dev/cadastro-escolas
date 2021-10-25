@extends('layouts/main')

@section('content_header')
    <h1>Cadastrar Aluno</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('alunos.store') }}" method="post">
            @csrf
                @include('formularios.aluno')
        </form>
    </div>
</div>

@endsection
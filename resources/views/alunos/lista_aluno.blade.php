@extends('layouts.main')

@section('content_header')
    <h1>Lista de Alunos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @include('listagens.list_alunos')
    </div>
</div>


@endsection
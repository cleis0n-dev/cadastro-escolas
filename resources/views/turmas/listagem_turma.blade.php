@extends('layouts.main')

@section('content_header')
    <h1>Listagens de Turmas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @include('listagens.list_turmas')
    </div>
</div>
   

@endsection
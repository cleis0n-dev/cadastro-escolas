@extends('layouts.main')

@section('content_header')
    <h1>Matriculas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @include('listagens.list_matriculas')
    </div>
</div>
    

@endsection
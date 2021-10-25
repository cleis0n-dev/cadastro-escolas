@extends('layouts.main')

@section('content_header')
    <h1>Matricular</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('matricula.store') }}" method="post">
                @csrf
                    @include('formularios.matricula')
            </form>
        </div>
    </div>

@endsection
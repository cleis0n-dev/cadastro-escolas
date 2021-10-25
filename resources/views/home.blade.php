@extends('adminlte::page')

@section('title', 'Atlas Escolar')

@section('content_header')
    <h1>Atlas Escolar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            @include('textos.home')
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop

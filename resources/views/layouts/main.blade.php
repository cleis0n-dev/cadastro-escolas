@extends('adminlte::page')

@section('title', 'Sistema Escolar')

@section('content')
    @yield('content','main')
@stop

@section('css')
        <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@stop


@section('js')
    @include('sweetalert::alert')
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    
@stop

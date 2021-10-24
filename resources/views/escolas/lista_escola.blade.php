@extends('/layouts/main')

@section('content_header')
    <h1>Lista de Instituições</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
            @include('listagens.lista_escolas')
        
    </div>
</div>
    
@endsection
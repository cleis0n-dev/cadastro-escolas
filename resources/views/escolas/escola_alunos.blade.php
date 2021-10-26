@extends('/layouts/main')

@section('content_header')
    <h1>Relação de Estudantes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @include('listagens.list_escolas_alunos')
    </div>
</div>
    
@endsection

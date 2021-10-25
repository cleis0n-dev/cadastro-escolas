@extends('/layouts/main')

@section('content_header')
    <h1>Cadastrar nova Turma</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('turmas.store') }}" method="post">
                @csrf
                    @include('formularios.turma')
            </form>
        </div>
    </div>

@endsection
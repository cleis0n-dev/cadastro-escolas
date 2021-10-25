@extends('/layouts/main')

@section('content_header')
    <h1>Editar Turma</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('turmas.update',$turma->id) }}" method="post">
                @method('PUT')
                @csrf
                    @include('formularios.turma')
            </form>
        </div>
    </div>

@endsection
@extends('/layouts/main')

@section('content_header')
    <h1>Instituição de ensino</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('escolas.update',$escola->id) }}" method="POST">
            @method('PUT')
            @csrf
                @include('formularios.escola')
        </form>
    </div>
</div>
    
@endsection
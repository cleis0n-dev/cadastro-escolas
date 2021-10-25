<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="instituicao">Instituição de Ensino:</label>
        <input type="text" id="" value="{{ $escola->nome }}" class="form-control bg-white" readonly>
        <input type="hidden" name="id_escola" value="{{ $turma->escola_id }}">
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="">Turma: </label>
        <input type="text" value="{{ $turma->serie }}º Série - {{ $turma->turno }} - {{ $turma->nivel }}" id="" class="form-control bg-white" readonly>
        <input type="hidden" name="id_turma" value="{{ $turma->id }}">
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="aluno">Aluno:</label>
        <select name="id_aluno" id="" class="custom-select">
            @foreach($alunos as $aluno)
                <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row mt-2">
    <div class="col-8 col-sm-9 col-lg-9">
        <button type="submit" class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{ route('turmas.show') }}" class="btn btn-secondary">Turmas</a>
    </div>
</div>

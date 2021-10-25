<div class="row mt-2">
    <div class="col-12 col-sm-12 col-12">
        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome" value="{{ $aluno->nome ?? old('nome') }}" id="" class="form-control">
        <small class="text-danger">
            @error('nome')
                {{ $message }}
            @enderror
        </small>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-4 col-lg-3">
        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" value="{{ $aluno->telefone ?? old('telefone') }}" id="" class="form-control">
    </div>
    <div class="col-12 col-sm-6 col-lg-6">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $aluno->email ?? old('email') }}" id="" class="form-control">
        <small class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </small>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <label for="dt_nascimento">Data de Nascimento:</label>
        <input type="date" name="dt_nascimento" value="{{ date('Y-m-d', strtotime($aluno->dt_nascimento ?? old('dt_nascimento')))}}" id="" class="form-control">
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-6 col-lg-10">
        <button type="submit" class="btn btn-primary">Gravar</button>
        <button type="reset" class="btn btn-dark">Limpar</button>
    </div>
</div>
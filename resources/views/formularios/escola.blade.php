<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="Nome_Instituicao">Nome da Instituição: </label>
        <input type="text" name="nome" value="{{ $escola->nome ?? old('nome') }}" id="" class="form-control">
        @error('nome')
            {{ $message }}
        @enderror
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="endereço">Endereço: </label>
        <input type="text" name="endereço" id="" value="{{ $escola->endereço ?? old('endereço') }}"class="form-control">
        <small class="text-danger">
            @error('endereço')
                {{ $message }}
            @enderror
        </small>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <button type="submit" class="btn btn-primary">Gravar</button>
        <button type="reset" class="btn btn-dark" >Resetar</button>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="instituição">Instituição de ensino:</label>
        <input type="text" value="{{ $escola->id }} - {{ $escola->nome }}" id="" class="form-control bg-light" readonly>
        <input type="hidden" value="{{ $escola->id }}" name="escola_id">
    </div>
</div>
    <div class="row mt-2">
        <div class="col-12 col-sm-6 col-lg-3">
            <label for="nivel">Nível de Ensino: </label>
            <select name="nivel" id="" class="custom-select">
                <option value="{{$turma->nivel ?? old('nivel') }}">Escolher</option>
                <option value="Fundamental">Fundamental</option>
                <option value="Médio">Médio</option>
            </select>
            <small class="text-danger">
                @error('nivel')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <label for="serie">Série:</label>
            <input type="text" name="serie" value="{{$turma->serie?? old('serie') }}" id="" class="form-control">
            <small class="text-danger">
                @error('serie')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <label for="turno">Turno:</label>
            <select name="turno" id="" class="custom-select">
                <option value="{{ $turma->turno ?? old('turno') }}">Escolher</option>
                <option value="manhã">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
            </select>
            <small class="text-danger">
                @error('turno')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <label for="ano">Ano:</label>
            <input type="text" name="ano" value="{{$turma->ano ?? old('ano') }}" id="" class="form-control">
            <small class="text-danger">
                @error('ano')
                    {{ $message }}
                @enderror
            </small>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-8 col-sm-8 col-lg-8">
            <button type="submit" class="btn btn-primary">Gravar</button>
            <button type="reset" class="btn btn-dark">Limpar</button>
        </div>
        <div class="col-4 col-sm-4 col-lg-4">
            <a href="{{ route('turmas.show') }}" class="btn btn-secondary mx-auto">Turmas</a>
        </div>
    </div>
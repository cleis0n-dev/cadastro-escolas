<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use Alert;

class AlunoCrudController extends Controller
{
    
    public function index()
    {
        return view('alunos.cadastro_aluno');
    }


    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->all());

        return redirect()->route('alunos.index')->with([toast()->success('Cadastro de aluno realizado com sucesso!')]);
    }


    public function show(Aluno $aluno)
    {
        $aluno = Aluno::all();
        
        return view('alunos.lista_aluno',compact('aluno'));
    }


    public function edit($id)
    {
        $aluno = Aluno::findOrfail($id);

        return view('alunos.editar_aluno',compact('aluno'));
    }


    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::findOrfail($id);
        $aluno->update($request->all());

        return redirect()->back()->with([toast()->info('Cadastro de aluno atualizado com sucesso!')]);
    }


    public function destroy($id)
    {
        $aluno = Aluno::findOrfail($id);

        $aluno->delete();

        return redirect()->route('alunos.show')->with([toast()->info('Cadastro de Aluno excluído com sucesso!')]);
    }
}

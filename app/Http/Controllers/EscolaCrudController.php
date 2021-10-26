<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Http\Request;
use App\Http\Requests\EscolaRequest;
use Illuminate\Support\Facades\DB;
use Alert;

class EscolaCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('escolas.cadastro_escola');
    }

    public function list_studant(){
        $matriculas = DB::table('aluno_turmas')
            ->join('alunos', 'alunos.id', '=', 'aluno_turmas.id_aluno')
            ->join('turmas', 'turmas.id', '=', 'aluno_turmas.id_turma')
            ->join('escolas', 'escolas.id', '=', 'aluno_turmas.id_escola')
            ->select('aluno_turmas.*','alunos.nome', 'turmas.*', 'escolas.nome as escola')
            ->get();

        return view('escolas.escola_alunos',compact('matriculas')) ; 
    }

    
    public function store(EscolaRequest $request)
    {
        $escola = Escola::create($request->all());

        return redirect()->route('escolas.index')->with([toast()->success('Instituição de ensino cadastrada com sucesso!')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escola $escola)
    {
        $escola = Escola::all();

        return view('escolas.lista_escola', compact('escola'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escola = Escola::findOrfail($id);
        return view('escolas.editar_escola',compact('escola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(EscolaRequest $request,$id)
    {
        $escola = Escola::findOrfail($id);
        $escola->update($request->all());

        return redirect()->back()->with([toast()->info('Dados de Instituição alterados com sucesso!')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escola_select = Turma::all()->where('escola_id',$id);
        if(count($escola_select) > 0){
            return redirect()->back()->with([toast()->error('Esse registro possui referências')]);
        }
        else{
            $escola = Escola::findOrfail($id);
            $escola->delete();

            return redirect()->back()->with([toast()->info('Cadastro de Instituição excluído!')]);
        }
        
    }
}

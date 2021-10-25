<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\AlunoTurma;
use App\Models\Escola;
use App\Http\Requests\TurmaRequest;
use App\Http\Resources\TurmaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class TurmaCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('turmas.cadastro_turma');
    }

    public function store(TurmaRequest $request)
    {
        Turma::create($request->all());

        return redirect()->back()->with([toast()->success('Cadastro de turma realizado com sucesso!')]);
    }
    public function create($id){
        $escola = Escola::findOrfail($id);

        return view('turmas.cadastrar_turma',compact('escola'));
    }
    public function show(Turma $turma)
    {
       $turmas = DB::table('turmas')
            ->join('escolas', 'turmas.escola_id', '=', 'escolas.id')
            ->select('turmas.*', 'escolas.nome')
            ->get();
       return view('turmas.listagem_turma', compact('turmas'));
    }

    public function edit($id)
    {
        
        $turma = Turma::findOrfail($id);
        $escola = DB::table('escolas')->where('id',$turma->escola_id)->first();

        return view('turmas.editar_turma',compact('turma','escola'));
    }

    public function update(TurmaRequest $request, $id)
    {
        $turma = Turma::findOrfail($id);
        $turma->update($request->all());

        return redirect()->back()->withInput()->with([toast()->info('Cadastro de turma atualizado com sucesso!')]);
    }

    public function destroy($id)
    {
        $turma_select = AlunoTurma::all()->where('id_turma',$id);
        if(count($turma_select) > 0){
            return redirect()->back()->with([toast()->error('Esse registro possui referências')]);
        }
        else{

        $turma = Turma::findOrfail($id);
        $turma->delete($id);

        return redirect()->route('turmas.show')->with([toast()->info('Cadastro de turma excluído com sucesso!')]);
        }
    }
}

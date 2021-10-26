<?php

namespace App\Http\Controllers;

use App\Models\AlunoTurma;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\Escola;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use App\Http\Requests\AlunoTurmaRequest;
use Illuminate\Support\Facades\DB;

class AlunoTurmaCrudController extends Controller
{

 
    public function create(Request $request, $id)
    {
        $turma = Turma::findOrfail($id);

        $escola_id = $turma->escola_id;

        $escola = Escola::findOrfail($escola_id);

        $alunos = Aluno::all();

        return view('matriculas.matricula',compact('turma','escola','alunos'));
    }
/*
    public function autocomplete(Request $request){
        $alunos = Aluno::DB('alunos')->select('nome')
            ->where("nome","LIKE","%{$request->input('query')}%")->get();
        return response()->json($alunos);
    }
 */
    public function store(AlunoTurmaRequest $request)
    {
        $id_aluno = $request->id_aluno;
        $id_escola = $request->id_escola;
        $id_turma = $request->id_turma;

        $matricula = AlunoTurma::all()->where('id_aluno',$id_aluno)->where('id_escola',$id_escola)->where('id_turma',$id_turma);

        if(count($matricula) > 0){
            return redirect()->back()->with([toast()->error('Aluno já matrículado nessa turma')]);
        }
        else{
            $alunos = AlunoTurma::create($request->all());

            return redirect()->route('turmas.show')->with([toast()->success('Matrícula realizada com sucesso!')]);
        }
    }


    public function show(AlunoTurma $alunoTurma)
    {
     //   $aluno_turmas = AlunoTurma::all();

        $matriculas = DB::table('aluno_turmas')
            ->join('alunos', 'alunos.id', '=', 'aluno_turmas.id_aluno')
            ->join('turmas', 'turmas.id', '=', 'aluno_turmas.id_turma')
            ->join('escolas', 'escolas.id', '=', 'aluno_turmas.id_escola')
            ->select('aluno_turmas.*','alunos.nome', 'turmas.*', 'escolas.nome as escola')
            ->get();

        return view('matriculas.lista_matricula',compact('matriculas')) ; 
    }


    public function destroy($id)
    {
        $matricula = AlunoTurma::findOrfail($id);
        $matricula->delete();

        return redirect()->route('matricula.show')->with([toast()->info('Registro excluído com sucesso!')]);
    }
}

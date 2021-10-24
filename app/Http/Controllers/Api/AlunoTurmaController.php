<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AlunoTurma;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoTurmaRequest;
use App\Http\Resources\AlunoTurmaResource;

class AlunoTurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlunoTurmaResource::collection(AlunoTurma::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoTurmaRequest $request)
    {
    //utilizar request->validated() caso deseje criar um novo registro apenas com campos validados.
        $alunoturma = AlunoTurma::create($request->all());

        return new AlunoTurmaResource($alunoturma);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlunoTurma  $alunoTurma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunoTurma = AlunoTurma::findOrfail($id);
        return new AlunoTurmaResource($alunoTurma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlunoTurma  $alunoTurma
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoTurmaRequest $request, AlunoTurma $alunoTurma,$id)
    {
        $alunoTurma = AlunoTurma::findOrfail($id);
        $alunoTurma->update($request->all());

        return new AlunoTurmaResource($alunoTurma);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlunoTurma  $alunoTurma
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlunoTurma $alunoTurma,$id)
    {
        $alunoTurma = AlunoTurma::findOrfail($id);
        $alunoTurma->delete();
        
        return response()->noContent();
    }
}

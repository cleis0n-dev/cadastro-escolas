<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;
use App\Http\Requests\EscolaRequest;
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
        $escola = Escola::findOrfail($id);
        $escola->delete();

        return redirect()->back()->with([toast()->info('Cadastro de Instituição excluído!')]);
    }
}

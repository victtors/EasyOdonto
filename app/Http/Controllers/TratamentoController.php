<?php

namespace App\Http\Controllers;

use App\Tratamento;
use Illuminate\Http\Request;

class TratamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->api){
            $paciente_id = $request->paciente_id;
            $tratamentos = Tratamento::with(['servico', 'dente', 'paciente', 'dentista'])->where('paciente_id', $paciente_id)->get();
            return ["data" => $tratamentos];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tratamento = Tratamento::create($request->all());
        return ["tratamento"=>$tratamento];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamento $tratamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tratamento $tratamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamento $tratamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tratamento $tratamento)
    {
        //
    }
}

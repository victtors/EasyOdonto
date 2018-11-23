<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Tratamento;
use Illuminate\Http\Request;
use View;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $pacientes = Paciente::where('nome', 'like','%'.$request->s.'%')
        ->orWhere('cpf', 'like','%'.$request->s.'%')->get();

        if($request->api){
            return ["data" => $pacientes];
        }
        else{   
            return View::make('paciente.lista')
            ->with('pacientes', $pacientes);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('paciente.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = Paciente::create($request->all());
        Session::flash('message', 'Paciente criado com sucesso!');
        return Redirect::to('paciente/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $paciente = Paciente::find($id);

        return View::make('paciente.editar')
            ->with('paciente', $paciente);
    
    }

    public function prontuario($id){

        $tratamentos = Tratamento::with(['servico', 'dente', 'paciente', 'dentista'])->where('paciente_id', $id)->get();

        return View::make('paciente.prontuario')
            ->with('tratamentos', $tratamentos);

    }

    public function atestado($id, Request $request){

        $paciente = Paciente::find($id);

        $dentista = Auth::user();

        $dias = $request['dias'];

        return View::make('paciente.atestado')
            ->with('data', ['paciente' => $paciente, 'dentista' => $dentista, 
                'dias' => $dias]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);

        $paciente->fill($request->all());

        $paciente->save();

        Session::flash('message', 'Paciente editado com sucesso!');
        return Redirect::to('paciente/lista');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        Session::flash('message', 'Paciente deletado com sucesso');
        return Redirect::to('paciente/lista');
    }
}

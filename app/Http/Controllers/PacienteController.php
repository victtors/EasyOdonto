<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Paciente;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Pacientes;
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
use View;
use Session;
use Redirect;

<<<<<<< HEAD
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

        $paciente->nome = $request->nome;
        $paciente->cpf = $request->cpf;
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
=======
class PacienteController extends Controller {

    public function index() {

    	$list_pacientes = Pacientes::all();
    	return view('paciente.cadastrar', [
    		'pacientes' => $list_pacientes
    	]);
	}
	
	public function cadastrarView() {
		return view("paciente.cadastrar");
	}

	public function storePaciente(Request $request){
		Pacientes::create($request->all());
		
		return redirect ("/") -> with("message", "Paciente cadastrado com sucesso!");
	}
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
}

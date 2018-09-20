<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacientes;
use View;
use Session;
use Redirect;

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
}

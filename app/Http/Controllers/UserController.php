<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;
use Session;
use Redirect;

class UserController extends Controller
{
    public function cadastrarFuncionarioView() {
        return view("user.cadastrarFuncionario");
    }

    public function store(Request $request){
		User::create($request->all());
		return redirect ("/user/cadastrarFuncionario") -> with("message", "Funcionário cadastrado com sucesso!");
    }
    
    public function listaFuncionarioView() {
		$funcionario = User::all();
    	return view('user.listaFuncionario', [
    		'funcionario' => $funcionario
    	]);
    }
    
    public function deletarFuncionario(Request $request, $id){
		$funcionario = User::find($id);
		$funcionario->id = $request->id;
		$funcionario->delete();
		return redirect ("user/listaFuncionario") -> with("message", "Funcionrio deletado com sucesso!");
	}
}

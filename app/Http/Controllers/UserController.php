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
}

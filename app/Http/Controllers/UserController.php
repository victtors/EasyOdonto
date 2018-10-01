<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
<<<<<<< HEAD

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where('nome', 'like','%'.$request->s.'%')->where('tipo', 'D')->get();

        if($request->api){
            return ["data" => $users];
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
=======
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
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
}

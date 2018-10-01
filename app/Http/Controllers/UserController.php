<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;
use Session;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->api){
            $users = User::where('nome', 'like','%'.$request->s.'%')->where('tipo', 'D')->get();
            return ["data" => $users];
        }
        else{  
            $users = User::all();
            return View::make('funcionario.lista')
            ->with('funcionarios', $users);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('funcionario.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = User::create($request->all());
        Session::flash('message', 'Funcionário criado com sucesso!');
        return Redirect::to('funcionario/lista');
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
        $funcionario = User::find($id);

        return View::make('funcionario.editar')
            ->with('funcionario', $funcionario);
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
        $funcionario = User::find($id);

        $funcionario->fill($request->all());

        $funcionario->save();

        Session::flash('message', 'Funcionário editado com sucesso!');
        return Redirect::to('funcionario/lista'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = User::find($id);
        $funcionario->delete();

        Session::flash('message', 'Funcionário deletado com sucesso');
        return Redirect::to('funcionario/lista');
    }
}

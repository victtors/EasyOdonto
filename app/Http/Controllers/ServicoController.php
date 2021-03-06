<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use View;
use Session;
use Redirect;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->api){
            $servicos = Servico::where('ativo', 1)->where('nome', 'like','%'.$request->s.'%')->get();
            return ["data" => $servicos];
        }
        else{
            $servicos = Servico::where('nome', 'like','%'.$request->s.'%')->get();
            return View::make('servico.lista')
                ->with('servicos', $servicos);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('servico.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = Servico::create([
            'nome' => $request['nome'],
            'ativo' => 1
        ]);
        Session::flash('message', 'Serviço criado com sucesso!');
        return Redirect::to('servico/lista');
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
        $servico = Servico::find($id);

        return View::make('servico.editar')
            ->with('servico', $servico);
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
        $servico = Servico::find($id);

        $servico->nome = $request->nome;
        $servico->save();

        Session::flash('message', 'Serviço editado com sucesso!');
        return Redirect::to('servico/lista');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servico::find($id);

        $servico->ativo = $servico->ativo == 1 ? 0 : 1;

        $servico->save();

        $msg = $servico->ativo == 0 ? 'Serviço desativado com sucesso!' :
        'Serviço reativado com sucesso!';

        Session::flash('message', $msg);
        return Redirect::to('servico/lista');
    }
}

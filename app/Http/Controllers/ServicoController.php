<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use View;
use Session;
use Redirect;

<<<<<<< HEAD

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $servicos = Servico::all();

        return View::make('servico.lista')
            ->with('servicos', $servicos);
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
        $servico = Servico::create($request->all());
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
        $servico->delete();

        Session::flash('message', 'Serviço deletado com sucesso');
        return Redirect::to('servico/lista');
    }
=======
class ServicoController extends Controller
{

		private $servicos;

		public function __construct(AgendaController $agenda_controller) {

			$this->servicos = new Servico();
		}

    public function index() {

    	$list_servico = Servico::all();
    	return view('servico.cadastrarServico', [
    		'servico' => $list_servico
    	]);
	}

    public function cadastrarServicoView() {
			return view("servico.cadastrarServico");
	}

	public function editarServicoView($id) {

		$servico = Servico::find($id);
        return View::make('servico.editarServico')->with('servico', $servico);
	}

	public function updateServico(Request $request, $id) {

		$servico = Servico::find($id);
		$servico->nome_servico = $request->nome_servico;
		$servico->save();
		Session::flash('message', 'Serviço editado com sucesso!');
		return redirect('servico/listaServico');        
    }

		
	public function listaServicoView() {
		$servicos = Servico::all();
    	return view('servico.listaServico', [
    		'servicos' => $servicos
    	]);
	}
    
    public function storeServico(Request $request){
			Servico::create($request->all());
			return redirect ("/servico/listaServico") -> with("message", "Serviço cadastrado com sucesso!");
	}

	public function deletarServico(Request $request, $id){
		$servico = Servico::find($id);
		$servico->id = $request->id;
		$servico->delete();
		return redirect ("servico/listaServico") -> with("message", "Serviço deletado com sucesso!");
	}
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
}

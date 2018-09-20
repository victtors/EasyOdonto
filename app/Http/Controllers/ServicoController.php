<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use View;
use Session;
use Redirect;

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
}

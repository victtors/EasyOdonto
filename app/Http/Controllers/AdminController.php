<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class AdminController extends Controller
{

    public function index() {

    	$list_servico = Servico::all();
    	return view('admin.cadastrar_servico', [
    		'servico' => $list_servico
    	]);
	}

    public function cadastrarServicoView() {
		return view("admin.cadastrar_servico");
    }

}

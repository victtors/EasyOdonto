<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function store(Agenda $agenda) {
        var_dump($agenda);
    }
}

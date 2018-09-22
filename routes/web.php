<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Minha ROTAS
*/

Auth::routes();

Route::get("/", function() {
    return view('template.app');
});

Route::get("/admin", function() {
    return view('template.app2');
});

Route::group(["prefix" => "paciente"], function () {
    Route::get("/", "PacienteController@index");
    Route::get("/cadastrar", "PacienteController@cadastrarView");
    Route::post("/store","PacienteController@storePaciente");
});

Route::group(["prefix" => "admin"], function () {
    Route::get("/index", "AdminController@index");
});

Route::group(["prefix" => "servico"], function () {
    Route::get("/cadastrarServico", "ServicoController@cadastrarServicoView");
    Route::get("/listaServico", "ServicoController@listaServicoView");
    Route::get("/editarServico/{id}", "ServicoController@editarServicoView");
    Route::post("/deletarServico/{id}", "ServicoController@deletarServico");
    Route::post("/updateServico/{id}", "ServicoController@updateServico");
    Route::post("/store","ServicoController@storeServico");
});

Route::group(["prefix" => "user"], function () {
    Route::get("/cadastrarFuncionario", "UserController@cadastrarFuncionarioView");
    Route::post("/storeFuncionario","UserController@store");
});
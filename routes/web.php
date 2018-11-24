<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
<<<<<<< HEAD
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/paciente/lista', function () {
//     return view('paciente.lista');
// });

// Route::get('/paciente/cadastrar', function () {
//     return view('paciente.cadastrar');
// });

Route::get('paciente/lista', 'PacienteController@index');
Route::get('paciente/cadastrar', 'PacienteController@create');
Route::post('pacientes', 'PacienteController@store')->name('pacientes');
Route::post('paciente/delete/{id}', 'PacienteController@destroy');
Route::get('paciente/edit/{id}', 'PacienteController@edit');
Route::post('paciente/edit/{id}', 'PacienteController@update');
Route::get('paciente/prontuario/{id}', 'PacienteController@prontuario');
Route::get('paciente/atestado/{id}', 'PacienteController@atestado');

Route::get('users/lista', 'UserController@index');
Route::post('users/registro', 'UserController@store');

Route::get('servico/lista', 'ServicoController@index');
Route::get('servico/cadastrar', 'ServicoController@create');
Route::post('servicos', 'ServicoController@store')->name('servicos');
Route::post('servico/delete/{id}', 'ServicoController@destroy');
Route::get('servico/edit/{id}', 'ServicoController@edit');
Route::post('servico/edit/{id}', 'ServicoController@update');

Route::get('funcionario/lista', 'UserController@index');
Route::get('funcionario/cadastrar', 'UserController@create');
Route::post('funcionarios', 'UserController@store')->name('funcionarios');
Route::post('funcionario/delete/{id}', 'UserController@destroy');
Route::get('funcionario/edit/{id}', 'UserController@edit');
Route::post('funcionario/edit/{id}', 'UserController@update');

Route::get('dente/lista', 'DenteController@index');

Route::get('tratamento/lista', 'TratamentoController@index');
Route::post('tratamentos', 'TratamentoController@store')->name('tratamentos');

Route::get('relatorio/lista', 'RelatorioController@index');

Route::get('/agenda', function(){
	return view('agenda.agenda');
});

Route::get('/', function(){
	return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

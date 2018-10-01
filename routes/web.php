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
Route::get('/', function () {
    return view('welcome');
});

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

Route::get('users/lista', 'UserController@index');

Route::get('servico/lista', 'ServicoController@index');
Route::get('servico/cadastrar', 'ServicoController@create');
Route::post('servicos', 'ServicoController@store')->name('servicos');
Route::post('servico/delete/{id}', 'ServicoController@destroy');
Route::get('servico/edit/{id}', 'ServicoController@edit');
Route::post('servico/edit/{id}', 'ServicoController@update');

Route::get('/agenda', function(){
	return view('agenda.agenda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

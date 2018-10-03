<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', ['uses' => 'UsuarioController@login']);
//Route::get('/cadastro', ['uses' => 'UsuarioController@cadastro']);
Route::post('/usuario/cadastro', ['uses' => 'UsuarioController@CadastroUsuario'])->name('usu.cadastro');

Route::post('/usuario/login', ['uses' => 'UsuarioController@LoginUsuario'])->name('usu.login');
Route::post('/usuario/cadastro', ['uses' => 'UsuarioController@CadastroUsuario'])->name('usu.cadastro');
Route::get('/', ['uses' => 'ServicoController@CarregaServico']);
Route::get('/servico/{id}', ['uses' => 'ServicoController@GravaTemporariio']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

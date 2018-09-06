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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', ['uses' => 'UsuarioController@login']);
Route::get('/cadastro', ['uses' => 'UsuarioController@cadastro']);
Route::post('/usuario/cadastro', ['uses' => 'UsuarioController@CadastroUsuario'])->name('usu.cadastro');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

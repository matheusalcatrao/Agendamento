<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class UsuarioController extends Controller
{
	//
	
	public function cadastro() {
		return View('register');
	}
	
	public function CadastroUsuario(Request $request) {
		$data = [
			'nome' => (string)$request->get('nome'),
			'email' => $request->get('email'),
			'senha' => $request->get('password'),
			'numero' => $request->get('numero'),
			
		];
		
		Usuario::create($data);
		return View('home');
	}
	
	public function LoginUsuario(Request $request) {
		$email = $request->get('email');
		$senha = $request->get('password');
		$result = DB::table('usuarios')->where(['email' => $email, 'senha' => $senha])->get();
		if ($result->count() > 0) {
			return redirect()->back()->with('success', 'Logado');
		}
		else {
			return redirect()->back()->with('error', 'Falha login');
		}
	}

	
}

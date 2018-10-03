<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    

    public function CarregaServico() {
        $servicos = \DB::table('servicos')->select('*')->get();
        $tela = 1;
        return view('welcome',compact('servicos','tela'));
    }

    public function CarregaHorario() {
        $servicos = \DB::table('servicos')->select('*')->get();
        $tela = 2;
        
        return view('welcome',compact('servicos','tela')); 
    }

    public function GravaTemporariio(Request $request, $id)  {
        \DB::table('tmpservicos')->insert([
            'id_servico' => $id
        ]);
        //return redirect()->route('inicial');
        return $this->CarregaHorario();
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;

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

    public function GravaDados(Request $request)  {
        $id_servico = $_COOKIE['servico'];
        $data = $_COOKIE['data'];
        $horario = $_COOKIE['horario'];
        $oServicos = \DB::table('servicos')->select('servico','valor')->where('id',$id_servico)->get();
        foreach ($oServicos as $obj) {
            $serDescricao = $obj->servico;
            $serValor     = $obj->valor;
        }
        $dados = [
            'servico' => $serDescricao,
            'valor'   => $serValor,
            'data'    => $data,
            'horario' => $horario, 
            'usuario' => '',
            'email'   => '',
            'numero'  => '',
        ];
        
        Agendamento::create($dados);
        return redirect()->back();
    }
}

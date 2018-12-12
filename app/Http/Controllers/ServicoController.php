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

    public function ValidaHorario() {
        $atual = date("d/m/Y");
        $input = $_GET['sData'];
        //$input = "12/12/2018";
        $result = $input; 
        if ($input == "") {
            $result = $atual;
        }
        $consulta = \DB::table('agendamento')->select('data','horario')->where('data',$result)->get();
        
        return response()->json( array("retorno" => $consulta) );
    }
}

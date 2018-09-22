<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function CarregaServico() {

        $servicos = \DB::table('servicos')->select('*')->get();
        //dd($servicos);

        return view('welcome')->with('servicos',$servicos);
    }
}

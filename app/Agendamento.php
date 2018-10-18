<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    //
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'servico',
        'valor',
        'data',
        'horario',
        'usuario',
        'email',
        'numero',
    ];


    protected $table = 'agendamento';
}

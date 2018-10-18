<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'servico',
        'valor',
        'id_prof',
    ];


    protected $table = 'Servicos';
}

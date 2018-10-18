<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Usuario extends Model 
{
    //
    //use Authenticatable;


    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'nome',
        'senha',
        'email',
        'numero',
    ];


    protected $table = 'usuarios';

    

    
}

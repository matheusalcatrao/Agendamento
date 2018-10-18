<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    //
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'nome',
        'especialidade',
    ];


    protected $table = 'Profissionais';
}

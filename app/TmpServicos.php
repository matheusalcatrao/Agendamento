<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TmpServicos extends Model
{
    // Tabela Temporaria que vai ser gravado os itens antes da conclusão
    public $incrementing = false;
    protected $fillable = [
        'id',
        'servico',
        'valor',
        'id_prof',
    ];


    protected $table = 'TmpServicos';
}

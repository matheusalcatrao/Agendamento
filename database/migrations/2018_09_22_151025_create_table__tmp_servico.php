<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTmpServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TmpServicos', function (Blueprint $table) {
            $table->integer('id_servico');
            $table->integer('id_prof')->nullable();
            $table->integer('id_usuario')->nullable();
            $table->date('date')->nullable();
            $table->time('hora')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
       Schema::dropIfExists('TmpServicos');
    }
}

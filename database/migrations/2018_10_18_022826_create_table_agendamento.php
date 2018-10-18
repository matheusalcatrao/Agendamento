<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('agendamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servico');
            $table->string('valor');
            $table->string('data');
            $table->string('horario');
            $table->string('usuario');
            $table->string('email')->nullable();
            $table->string('numero')->nullable();
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
        Schema::dropIfExists('agendamento');
    }
}

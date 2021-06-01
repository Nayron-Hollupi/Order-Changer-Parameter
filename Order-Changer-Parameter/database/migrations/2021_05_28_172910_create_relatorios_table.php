<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Setor');
            $table->string('Tag_Maquina');
            $table->integer('Registro');
            $table->string('Data_inicio');
            $table->string('Data_fim');
            $table->time('Hora_inicio');
            $table->time('Hora_fim');
            $table->string('Laudo', 1000);
            $table->string('Problema', 1000);
            $table->string('Resumo' , 1000);
            $table->string('Pecas' , 1000);
            $table->integer('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorios');
    }
}

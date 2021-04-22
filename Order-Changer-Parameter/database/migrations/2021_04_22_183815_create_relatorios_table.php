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
            $table->string('Maquina');
            $table->string('Tag');
            $table->integer('Registro');
            $table->string('Data_inicio');
            $table->string('Data_fim');
            $table->string('Laudo');
            $table->string('Problema');
            $table->string('Resumo');
            $table->string('Pecas');
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

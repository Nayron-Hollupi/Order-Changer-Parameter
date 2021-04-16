<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Setor');
            $table->string('Maquina');
            $table->string('Registro_do_tecnico');
            $table->string('Causa_do_problema');
            $table->string('Data_inicio');
            $table->string('Data_fim');
            $table->string('Laudo_tecnico');
            $table->string('Peças_utilizadas');
            $table->string('Observações');
            $table->string('Status');
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
        Schema::dropIfExists('ordems');
    }
}


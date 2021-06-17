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
            $table->string('Solicitante');
            $table->string('Setor');
            $table->string('Tag_Maquina');
            $table->string('Problemas', 1000);
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
        Schema::dropIfExists('ordems');
    }
}

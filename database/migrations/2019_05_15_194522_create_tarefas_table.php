<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->unsignedBigInteger('usuario_responsavel');
            $table->boolean('privado');
            $table->string('descricao');
            $table->unsignedBigInteger('tipo');
            $table->string('status');
            $table->string('data_conclusao');
            $table->foreign('tipo')->references('id')->on('tipo_tarefas');
            $table->foreign('usuario_responsavel')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tarefas');
    }
}

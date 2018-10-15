<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servico_id')->unsigned()->nullable();
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('set null');
            $table->integer('dente_id')->unsigned()->nullable();
            $table->foreign('dente_id')->references('id')->on('dentes')->onDelete('set null');
            $table->integer('dentista_id')->unsigned()->nullable();
            $table->foreign('dentista_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null');
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
        Schema::dropIfExists('tratamentos');
    }
}

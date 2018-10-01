<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('dentista_id')->unsigned();
            $table->foreign('dentista_id')->references('id')->on('users');
            $table->integer('dente_id')->unsigned()->nullable();
            $table->foreign('dente_id')->references('id')->on('dentes')->onDelete('set null');
            $table->integer('servico_id')->unsigned()->nullable();
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('set null');
            $table->datetime('data');
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
        Schema::dropIfExists('consultas');
    }
}

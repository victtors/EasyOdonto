<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('data_nascimento');
            $table->string('genero');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('nacionalidade');
            $table->string('profissao');
            $table->string('contato');
            $table->string('email');
            $table->string('tratamentoMedico');
            $table->string('tomandoRemedio');
            $table->string('estaGravida');
            $table->string('suspendeuRemedio');
            $table->string('alergia');
            $table->string('sensivelMetalouLatex');
            $table->string('diabetico');
            $table->string('sujeitoAInfeccoes');
            $table->string('epilepsia');
            $table->string('desmaiaTonturas');
            $table->string('pressaoIrregular');
            $table->string('formigamentoExtremidades');
            $table->string('sangraMuito');
            $table->string('fuma');
            $table->string('foiOperado');
            $table->string('doencaGrave');
            $table->string('problemasCardiacos');
            $table->string('respiraBemPeloNariz');
            $table->string('dificuldadeAbrirBoca');
            $table->string('doresNaFace');
            $table->string('rangeOsDentes');
            $table->string('emamastigaBemAlimentosil');
            $table->string('retencaoDeComida');
            $table->string('mascarChiclete');
            $table->string('tomarCafe');
            $table->string('comerForaDeHora');
            $table->string('gengivaDolorida');
            $table->string('instrucaoDeHigieneBucal');
            $table->string('escovarOsDentes');
            $table->string('fioDental');
            $table->string('vaiAoDentista');
            $table->string('tratamentoOdontológico');
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
        Schema::dropIfExists('pacientes');
    }
}

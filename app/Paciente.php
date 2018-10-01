<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    
	 protected $fillable = [
        'id', 
        'nome', 
        'cpf',
        'data_nascimento', 
        'genero', 
        'endereco', 
        'cidade',
        'estado', 
        'nacionalidade',
        'profissao',
        'contato',
        'email',
        'tratamentoMedico',
        'tomandoRemedio',
        'estaGravida',
        'suspendeuRemedio',
        'alergia',
        'sensivelMetalouLatex',
        'diabetico',
        'sujeitoAInfeccoes',
        'epilepsia',
        'desmaiaTonturas',
        'pressaoIrregular',
        'formigamentoExtremidades',
        'sangraMuito',
        'fuma',
        'foiOperado',
        'doencaGrave',
        'problemasCardiacos',
        'respiraBemPeloNariz',
        'dificuldadeAbrirBoca',
        'doresNaFace',
        'rangeOsDentes',
        'emamastigaBemAlimentosil',
        'retencaoDeComida',
        'mascarChiclete',
        'tomarCafe',
        'comerForaDeHora',
        'gengivaDolorida',
        'instrucaoDeHigieneBucal',
        'escovarOsDentes',
        'fioDental',
        'vaiAoDentista',
        'tratamentoOdontológico'
    
    ];

    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }

}

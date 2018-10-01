<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
<<<<<<< HEAD
    
	protected $fillable = ['paciente_id', 'dente_id', 'dentista_id', 'servico_id', 'data'];


    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function dentista()
    {
        return $this->belongsTo('App\User');
    }


=======
    protected $filable =   [
        'id',
        'tratamento_id',
        'paciente_id',
    ];

    protected $table = 'consulta';
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
}

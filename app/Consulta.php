<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    
	protected $fillable = ['paciente_id', 'dente_id', 'dentista_id', 'servico_id', 'data'];


    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function dentista()
    {
        return $this->belongsTo('App\User');
    }


}

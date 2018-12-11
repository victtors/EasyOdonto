<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    //
    protected $fillable = ['dente_id', 'servico_id', 'dentista_id', 'paciente_id', 'concluido'];


    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function dente()
    {
        return $this->belongsTo('App\Dente');
    }


    public function dentista()
    {
        return $this->belongsTo('App\User');
    }

    public function servico()
    {
        return $this->belongsTo('App\Servico');
    }

    public function getUpdatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d/m/Y');
    }

}

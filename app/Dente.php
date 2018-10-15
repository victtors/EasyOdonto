<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dente extends Model
{
    //
    protected $filable =   [
        'id',
        'numero',
        'nome',
    ];

    public function tratamentos()
    {
        return $this->hasMany('App\Tratamento');
    }

}

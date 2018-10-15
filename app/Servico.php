<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['nome'];

    public function tratamentos()
    {
        return $this->hasMany('App\Tratamento');
    }
    
}

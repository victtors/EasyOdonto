<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dente extends Model
{
    protected $filable =   [
        'id',
        'numero_dente',
        'nome_dente',
    ];

    protected $table = 'dente';
}

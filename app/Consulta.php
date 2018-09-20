<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $filable =   [
        'id',
        'tratamento_id',
        'paciente_id',
    ];

    protected $table = 'consulta';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $filable =   [
        'id',
        'hora_marcada',
        'data_marcada',
        'paciente_id'
    ];

    protected $table = 'agenda';
}

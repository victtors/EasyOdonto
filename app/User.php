<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =   [
        'nome',
        'cpf',
        'tipo_usuario',
        'cro',
        'login',
        'senha',
        'especialidade',
        'telefone'
        
    ];

    protected $table = 'user';
}

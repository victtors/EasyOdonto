<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'usuario', 'password', 'cpf', 'tipo', 'ativo', 'cargo', 'cro'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }

    public function tratamentos()
    {
        return $this->hasMany('App\Tratamento');
    }

}

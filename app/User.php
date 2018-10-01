<?php

namespace App;

<<<<<<< HEAD
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
        'nome', 'usuario', 'password', 'cpf', 'tipo'
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
=======
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
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
}

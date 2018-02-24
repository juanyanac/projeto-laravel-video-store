<?php

namespace GestorImagenes;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as Authenticatable:
use Illuminate\Notifications\Notifiable;

class Usuario Model implements Authenticatable, CanResetPassword
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'usuarios';

    protected $fillable = [
        'id','nome', 'email', 'password','pregunta1','pregunta2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function albumes()
    {
        return $this->hasMany('GestorImagenes\Album');
    }

}


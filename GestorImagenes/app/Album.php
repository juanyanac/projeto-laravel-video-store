<?php

namespace GestorImagenes;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'albunes';

    protected $fillable = [
        'id','nome', 'descricao', 'usuario_id',
    ];

    public function fotos()
    {
        return $this->hasMany('GestorImagenes\Foto');
    }

    public function propietario()
    {
        return $this->belongsTo('GestorImagenes\Usuario');
    }

}

<?php

namespace GestorImagenes;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'fotos';

    protected $fillable = [
        'id','nome','descricao','rota','album_id',
    ];

    public function album()
    {
     return $this->belongsTo('GestorImagenes\Album');   
    }

}

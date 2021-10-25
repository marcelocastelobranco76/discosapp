<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Disco.
 *
 * @package namespace App\Entities;
 */
class Disco extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','artista','ano','ano_edicao'
    ,'selo','pais','formato','tipo','especificacoes'];

    public function userDisco()
    {
        return $this->belongsTo('App\Entities\UserDisco');
    }



}

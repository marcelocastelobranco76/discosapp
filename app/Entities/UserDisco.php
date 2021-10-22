<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class UserDisco.
 *
 * @package namespace App\Entities;
 */
class UserDisco extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','disco_id'];

    public function discos()
    {
        return $this->hasMany('App\Entities\Disco');
    }

}

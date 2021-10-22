<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\User_DiscoRepository;
use App\Entities\UserDisco;
use App\Validators\UserDiscoValidator;

/**
 * Class UserDiscoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserDiscoRepositoryEloquent extends BaseRepository implements UserDiscoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserDisco::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserDiscoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DiscoRepository;
use App\Entities\Disco;
use App\Validators\DiscoValidator;

/**
 * Class DiscoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DiscoRepositoryEloquent extends BaseRepository implements DiscoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Disco::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return DiscoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

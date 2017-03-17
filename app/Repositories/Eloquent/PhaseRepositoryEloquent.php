<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\PhaseRepository;
use App\Models\Phase;
use App\Validators\PhaseValidator;

/**
 * Class PhaseRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class PhaseRepositoryEloquent extends BaseRepository implements PhaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Phase::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PhaseValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

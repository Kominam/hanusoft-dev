<?php

namespace App\Repository\Eloquent;
use App\Repository\Contract\RepositoryInterface;
use App\Repository\Eloquent\RepositoryAbstract;

class MemberRepository extends RepositoryAbstract{
/**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\User';
    }
}
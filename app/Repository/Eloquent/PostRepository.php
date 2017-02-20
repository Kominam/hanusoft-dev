<?php

namespace App\Repository\Eloquent;
use App\Repository\Contract\RepositoryInterface;
use App\Repository\Eloquent\RepositoryAbstract;

class PostRepository extends RepositoryAbstract{
/**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Post';
    }

    public function all($columns = array('*')){
    	return $this->model->with(['user','comments','category'])->get($columns);
    }

    public function recents(){
        return $this->model->recent()->get();
    }
}
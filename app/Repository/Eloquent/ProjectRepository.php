<?php

namespace App\Repository\Eloquent;
use App\Repository\Contract\RepositoryInterface;
use App\Repository\Eloquent\RepositoryAbstract;
use App\Models\Project;

class ProjectRepository extends RepositoryAbstract{
/**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Project';
    }

    public function count(){
    	return Project::count();
    }

    public function findRelated($id, $type)
    {
        return $this->model->where('id','!=',$id)->where('type','==', $type)->get();
    }
}
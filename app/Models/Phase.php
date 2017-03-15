<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'phases';
    protected $guarded =['id'];
    public $timestamp =true;

    public function project() 
    {
    	return $this->belongsTo(Project::class);
    }

    public function tasks() 
    {
    	return $this->hasMany(Task::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resources';
    protected $guarded =['id'];
    public $timestamp =true;

    public function project() 
    {
    	return $this->belongsTo(Project::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}

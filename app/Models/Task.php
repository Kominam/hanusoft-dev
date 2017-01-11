<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $guarded =['id'];
    public $timestamp =true;

    public function phase() 
    {
    	return $this->belongsTo(Phase::class);
    }

    public function user() 
    {
    	return $this->belongsTo(User::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];
    public $timestamp = true;

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

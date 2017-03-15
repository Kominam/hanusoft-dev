<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = ['id'];
    public $timestamp = true;

    public function commentable()
    {
        return $this->morphTo();
    }
}

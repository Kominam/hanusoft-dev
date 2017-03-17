<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Comment extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'comments';
    protected $fillable = [
        'name',
        'email',
        'body',
        'parent_id',
    ];
    protected $guarded = ['id'];
    public $timestamp  = true;

    public function commentable()
    {
        return $this->morphTo();
    }

}

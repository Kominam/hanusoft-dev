<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'categories';
    protected $guarded  = ['id'];
    protected $fillable = [
        'name',
    ];
    public $timestamp = true;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}

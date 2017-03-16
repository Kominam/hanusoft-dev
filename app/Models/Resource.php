<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Resource extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'resources';

    protected $fillable = [
        'name',
        'description',
        'url',
        'user_id',
        'project_id'
    ];
    protected $guarded = ['id'];
    public $timestamp  = true;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Skill extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'skills';
    protected $fillable = [
        'name',
    ];
    protected $guarded = ['id'];
    public $timestamp  = true;

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('value');
    }

}

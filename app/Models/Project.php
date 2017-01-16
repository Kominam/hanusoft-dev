<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table   = 'projects';
    protected $guarded = ['id'];
    public $timestamp  = true;
    const WEB_TYPE = 0;
    const APLLICATION_TPYE =1;
    const BRAND_TYPE =2;
    const LOGO_TYPE =3;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getTypeAttribute($value)
    {
        if ($value == 0)
        {
            return 'Web';
        } else if ($value ==1){
            return 'Application';
        } else if ($value == 2) {
            return 'Brand';
        } else {
            return 'Logo';
        }
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function phases()
    {
        return $this->hasMany(Phase::class);
    }

    public function tasks()
    {
        return $this->hasManyThrough(Phase::class, Task::class);
    }
}

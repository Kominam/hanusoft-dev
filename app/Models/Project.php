<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use \Carbon\Carbon;

class Project extends Model implements Transformable
{
    use Sluggable;
    use SluggableScopeHelpers;
    use TransformableTrait;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'date',
        'plan_start_date',
        'actual_start_date',
        'plan_end_date',
        'actual_end_date',
        'source_url',
    ];
    protected $guarded = ['id'];
    protected $casts   = [
        'image' => 'array',
    ];
    public $timestamp      = true;
    const WEB_TYPE         = 0;
    const APLLICATION_TPYE = 1;
    const BRAND_TYPE       = 2;
    const LOGO_TYPE        = 3;

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
        if ($value == 0) {
            return 'Web';
        } else if ($value == 1) {
            return 'Application';
        } else if ($value == 2) {
            return 'Brand';
        } else {
            return 'Logo';
        }
    }

    public function getPlanStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('jS F Y');
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function skills()
    {
        return $this->morphToMany(Skill::class, 'skillable');
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

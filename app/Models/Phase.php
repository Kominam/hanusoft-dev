<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Phase extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'phases';
    protected $fillable = [
        'name',
        'description',
        'order',
        'plan_start_date',
        'actual_start_date',
        'plan_end_date',
        'actual_end_date',
        'project_id',
    ];
    protected $guarded = ['id'];
    public $timestamp  = true;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}

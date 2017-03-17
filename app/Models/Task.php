<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Task extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'tasks';
    protected $fillable = [
        'name',
        'description',
        'order',
        'priority',
        'is_done',
        'is_on_progress',
        'is_over_duedate',
        'is_pending',
        'is_interupted',
        'plan_start_date',
        'actual_start_date',
        'plan_end_date',
        'actual_end_date',
        'user_id',
        'phase_id',
    ];
    protected $guarded = ['id'];
    public $timestamp  = true;

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

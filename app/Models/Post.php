<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Post extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table      = "posts";
    protected $guarded    = ['id'];
    public $timestamp     = true;
    protected $attributes = ['comment_count', 'created_day', 'created_month'];
    protected $appends    = ['comment_count', 'created_day', 'created_month'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at')->take(5);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function getCommentCountAttribute()
    {
        return $this->attributes['comment_count'] = $this->comments->count();
    }

    public function getCreatedDayAttribute()
    {
        return $this->attributes['created_day'] = Carbon::parse($this->created_at)->format('d');
    }

    public function getCreatedMonthAttribute()
    {
        return $this->attributes['created_month'] = substr(Carbon::parse($this->created_at)->format('F'), 0, 3);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

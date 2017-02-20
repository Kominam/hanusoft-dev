<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table="posts";
    protected $guarded =['id'];
    public $timestamp =true;
    protected $attributes = ['comment_count'];
    protected $appends = ['comment_count'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeRecent($query){
        return $query->orderBy('created_at')->take(5);
    }

    public function user() {
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


    public function category() {
        return $this->belongsTo(Category::class);
    }

}

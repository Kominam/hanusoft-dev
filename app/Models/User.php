<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bio', 'grade', 'major', 'avatar_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    const GENDER_MALE     = 0;
    const GENDER_FEMALE   = 1;
    const DEVELOPER_MAJOR = 'Developer';
    const DESIGNER_MAJOR  = 'Designer';
    const TESTER_MAJOR    = 'Tester';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withPivot('value');
    }

    public function getAvatarImageAttribute($value)
    {
        return config('hanusoft.paths.avatar_image') . $value;
    }
}

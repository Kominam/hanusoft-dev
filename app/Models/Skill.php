<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table="skills";
    protected $guarded =['id'];
    public $timestamp =true;

    public function users() {
      return $this->belongsToMany(User::class)->withPivot('value');
    }
}

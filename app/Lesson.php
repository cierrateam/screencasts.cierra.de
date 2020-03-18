<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['name', 'description', 'url'];

    public function getShowUrlAttribute()
    {
        return '/lessons/' . $this->id;
    }
}

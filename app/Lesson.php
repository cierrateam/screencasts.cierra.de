<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['name', 'description', 'url', 'series_id'];


    public function getShowUrlAttribute()
    {
        return '/lessons/' . $this->id;
    }


    public function series()
    {
        return $this->belongsTo(Series::class, 'series_id');
    }
}

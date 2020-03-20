<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}

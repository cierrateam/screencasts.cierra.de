<?php

namespace App\Http\Livewire;

use App\Lesson;
use Livewire\Component;

class LessonsList extends Component
{
    public $lessons;

    public function __construct()
    {
        $this->lessons = Lesson::all();
    }
    public function render()
    {
        return view('livewire.lessons-list');
    }
}

<?php

namespace App\Http\Livewire;

use App\Lesson;
use Livewire\Component;

class LessonsList extends Component
{
    public $lessons;

    public function mount($series)
    {
        $this->lessons = Lesson::whereSeriesId($series)->get();
    }
    public function render()
    {
        return view('livewire.lessons-list');
    }
}

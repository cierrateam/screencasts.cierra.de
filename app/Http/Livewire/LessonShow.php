<?php

namespace App\Http\Livewire;

use App\Lesson;
use App\Series;
use Livewire\Component;

class LessonShow extends Component
{
    public $lesson;
    public $series;

    public function mount($lesson)
    {
        $this->lesson = Lesson::find($lesson);
        $this->series = Series::find($this->lesson->series_id);
    }
    public function render()
    {
        return view('livewire.lesson-show');
    }
}

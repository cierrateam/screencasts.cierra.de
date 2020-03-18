<?php

namespace App\Http\Livewire;

use App\Lesson;
use Livewire\Component;

class LessonShow extends Component
{
    public $lesson;

    public function mount($lesson)
    {
        $this->lesson = Lesson::find($lesson);
    }
    public function render()
    {
        return view('livewire.lesson-show');
    }
}

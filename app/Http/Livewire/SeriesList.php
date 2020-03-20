<?php

namespace App\Http\Livewire;

use App\Series;
use Livewire\Component;

class SeriesList extends Component
{
    public $series;

    public function mount()
    {
        $this->series = Series::all();
    }

    public function render()
    {
        return view('livewire.series-list');
    }
}

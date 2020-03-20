<?php

namespace Tests\Feature;

use App\Http\Livewire\SeriesList;
use App\Lesson;
use App\Series;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SeriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_series_can_be_listed_in_component()
    {
        $this->login();

        $series = factory(Series::class)->create();

        Livewire::test(SeriesList::class)->assertSee($series->name);
    }

    public function test_the_count_of_lessons_is_displayed()
    {
        $this->login();

        $series = factory(Series::class)->create();
        $series = factory(Lesson::class)->create(['series_id' => $series->id]);
    }
}

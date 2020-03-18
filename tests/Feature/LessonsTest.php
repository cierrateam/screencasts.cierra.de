<?php

namespace Tests\Feature;

use App\Http\Livewire\LessonShow;
use App\Http\Livewire\LessonsList;
use App\Lesson;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LessonsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_lesson_can_be_stored()
    {
        $lesson = factory(Lesson::class)->create();
        $this->assertDatabaseHas('lessons', ['name' => $lesson->name]);
    }

    public function test_all_lessons_are_visible_in_lessons_index()
    {
        $this->login();

        $lesson = factory(Lesson::class)->create();

        Livewire::test(LessonsList::class)
            ->assertSee($lesson->name);
    }

    public function test_a_lesson_is_shown_on_lesson_show_component()
    {
        $this->login();

        $lesson = factory(Lesson::class)->create();

        Livewire::test(LessonShow::class, ['lesson' => $lesson->id])
            ->assertSee($lesson->name);

        $assert_instance = $this->get($lesson->show_url);

        foreach (Lesson::all() as $lesson) {
            $assert_instance->assertSee($lesson->name);
        }
    }

    public function login()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        return $user;
    }
}

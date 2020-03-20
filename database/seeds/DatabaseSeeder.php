<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        factory(\App\User::class)->create(['email' => 'vittorio@cierra.de']);

        $series_collection = factory(\App\Series::class, 4)->create();
        foreach ($series_collection as $series) {
            factory(\App\Lesson::class, 8)->create(['series_id' => $series->id]);
        }
    }
}

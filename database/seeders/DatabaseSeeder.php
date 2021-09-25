<?php

namespace Database\Seeders;

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
        \App\Models\Lecturer::factory(10)->create();
        \App\Models\Student::factory(10)->create();

        \App\Models\CourseGroup::create(
            [
            'name' => 'General Science',
            'semester_id' => 1,
            ],
            [
            'name' => 'Philosophy',
            'semester_id' => 1,
            ],
            [
            'name' => 'Social Sciences',
            'semester_id' => 2,
            ],
            [
            'name' => 'Architectural Sciences',
            'semester_id' => 2,
            ],
        );


        \App\Models\Semester::create(
            [
            'name' => 'First Semester',
            'term' => 1,
            ],
            [
            'name' => 'Second Semester',
            'term' => 1,
            ],
            [
            'name' => 'First Semester',
            'term' => 2,
            ],
            [
            'name' => 'Second Semester',
            'term' => 2,
            ],
        );


    }
}

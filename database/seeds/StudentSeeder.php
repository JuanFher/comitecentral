<?php

use App\Course;
use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();

        $courses->each(function ($course)
        {
            factory(Student::class, 20)->create([
                'course_id' => $course->id
            ]);
        });
    }
}

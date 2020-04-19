<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::create([
            'name' => 'Primero de Básica A',
            'teacher_name' => 'profesora 1',            
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Primero de Básica B',
            'teacher_name' => 'profesora 2',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Primero de Básica C',
            'teacher_name' => 'profesora 3',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Segundo de Básica A',
            'teacher_name' => 'profesora 4',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Segundo de Básica B',
            'teacher_name' => 'profesora 5',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Segundo de Básica C',
            'teacher_name' => 'profesora 6',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Tercero de Básica A',
            'teacher_name' => 'profesora 7',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Tercero de Básica B',
            'teacher_name' => 'profesora 8',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Tercero de Básica C',
            'teacher_name' => 'profesora 9',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Cuarto de Básica A',
            'teacher_name' => 'profesora 10',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Cuarto de Básica B',
            'teacher_name' => 'profesora 11',
            'college_id' => 1,
        ]);

        $course = Course::create([
            'name' => 'Cuarto de Básica C',
            'teacher_name' => 'profesora 12',
            'college_id' => 1,
        ]);

    }
}

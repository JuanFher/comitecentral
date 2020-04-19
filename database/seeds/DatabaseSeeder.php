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
         $this->call(RolesAndPermissionsTableSeeder::class);
         $this->call(SchoolYearSeeder::class);
         $this->call(CollegeSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(CourseSeeder::class);
         $this->call(StudentSeeder::class);
         
    }
}

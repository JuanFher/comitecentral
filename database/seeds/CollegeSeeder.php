<?php

use App\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $college = College::create([
            'name' => 'UEPP',
            'school_years_id' => 1
        ]);
    }
}

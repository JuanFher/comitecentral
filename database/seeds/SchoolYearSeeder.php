<?php


use App\SchoolYear;
use Illuminate\Database\Seeder;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $college = SchoolYear::create([
            'name' => '2019-2020'
        ]);
    }
}

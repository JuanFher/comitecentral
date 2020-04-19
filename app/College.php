<?php

namespace App;

use App\Course;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
   protected $fillable = [
        'name', 'school_years_id'
    ];

    public function courses()
    {
        $this->hasMany(Course::class);
    }
}

<?php

namespace App;

use App\College;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'teacher_name', 'college_id',
    ];

    public function college()
    {
        $this->belongsTo(College::class);
    }
}

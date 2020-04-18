<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
   protected $fillable = [
        'name', 'school_years_id'
    ];
}

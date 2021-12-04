<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChekOut extends Model
{
    protected $fillable = [
        'user_id','course_id', 'courseTitle', 'total','quantity','pay'
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'description1','name', 'job', 'description2','image1','facebook','instagram','image2'
    ];

    
}

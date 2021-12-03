<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnroll extends Model
{
    protected $fillable = [
        'courseTitle','price', 'courseDetails1', 'courseDetails2','courseDetails3','courseDetails4',
        'courseDetails5',
    ];
    

   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $fillable = [
        'category1','category2', 'category3', 'category4','description1','description2','description3','description4'
    ];
}

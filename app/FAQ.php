<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $fillable = [
        'description','image', 'question1', 'question2','question3','question4','answer1','answer2','answer3','answer4'
    ];

   
}

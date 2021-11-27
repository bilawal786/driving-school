<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    protected $fillable = [
        'backGroundImage','title1', 'title2', 'title3','title4','counter1','counter2','counter3','counter4'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = [
        'description','image1', 'image2', 'image3','image4','image5','image6'
    ];
}

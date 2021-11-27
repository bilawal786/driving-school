<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobber extends Model
{
    protected $fillable = [
        'image','backGroundImage', 'description', 'name','job',
    ];
    
}

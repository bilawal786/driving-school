<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'logo','phone1', 'email', 'startTime','endTime','aboutDescription','address','phone2','facebook','instagram','articleBlogTitle1',
        'articleDescription1','articleImage1','articleBlogTitle2','articleDescription2','articleImage2','articleBlogTitle3',
        'articleDescription3','articleImage3','copyRight','siteName','simage1','simage2','simage3','footerBackGroundImage',
        'jooberBackGroundImage','courseDescription','courseBackGroundImage'
    ];

    
        

}

 

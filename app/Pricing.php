<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'pricingDescription','price1', 'pricingDetails11', 'pricingDetails12','pricingDetails13','pricingDetails14',
        'pricingDetails15','pricingTitle1','pricingTitle2','price2','pricingDetails21','pricingDetails22','pricingDetails23','pricingDetails24',
        'pricingDetails25','pricingTitle3','price3','pricingDetails31','pricingDetails32','pricingDetails33','pricingDetails34','pricingDetails35',
        'pricingTitle4','price4','pricingDetails41','pricingDetails42','pricingDetails43','pricingDetails44','pricingDetails43','pricingDetails45'
    ];

   
}

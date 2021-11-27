<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Funfact;
use App\FAQ;
use App\Jobber;
use App\Galery;
use App\Video;
use App\Pricing;
use App\Features;
use App\Website;
use App\CourseCategory;

class FrontendController extends Controller
{
    public function index(){
        $about = About::first();
        return view('front.index',compact('about'));
    }
}

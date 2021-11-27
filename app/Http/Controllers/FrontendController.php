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
use App\Instructor;

class FrontendController extends Controller
{
    public function index(){
        $about = About::first();
        $funfact = Funfact::first();
        $feature = Features::first();
        $faq = FAQ::first();
        $galery = Galery::first();
        $jobber = Jobber::all();
        $website = Website::first();
        $courseCategory = CourseCategory::first();
        $pricing = Pricing::first();
        $video = Video::first();
        $instructor = Instructor::all();


        return view('front.index',compact('about','funfact','feature','faq','galery','jobber','website','courseCategory','pricing','video','instructor'));
    }
}

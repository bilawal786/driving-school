<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Funfact;
use App\FAQ;
use App\Offers;
use App\Jobber;
use App\Galery;
use App\CourseEnroll;
use App\Video;
use App\Pricing;
use App\Features;
use App\Website;
use App\CourseCategory;
use App\Instructor;
use Validator;
use Session;
use Auth;

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
        $offers = Offers::first();
        $instructor = Instructor::all();
        $courseEnroll = CourseEnroll::all();


        return view('front.index',compact('about','funfact','feature','faq','galery','jobber','website','courseCategory','pricing','video','instructor','courseEnroll','offers'));
    }
    public function contact(){
       
        $website = Website::first();
       
        return view('front.contact',compact('website'));
    }
    public function logIN(){
       
        $website = Website::first();
        return view('front.login',compact('website'));
    }
    public function profileUpdate(Request $request){
       
        $user = Auth::user();

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $user->image = 'admin/setting/' . $name;
        } 
        $user->update();

         Session::flash('message', "Your Data Not Save");
            return back();
    }
}

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
use App\Contact;
use App\CourseCategory;
use App\Instructor;
use Validator;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;

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
    public function fetaureDetails($title){

        $website = Website::first();
        $fetaure = Features::first();
        return view('front.details.fetaure',compact('website','title','fetaure'));
    }
    public function categoryCourseDetails($category){

        $website = Website::first();
        $categoryCourse = CourseCategory::first();
        return view('front.details.categorycourse',compact('website','category','categoryCourse'));
    }
    public function logIN(){

        $website = Website::first();
        return view('front.login',compact('website'));
    }
    public function register(){

        $website = Website::first();
        return view('front.register',compact('website'));
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

         Session::flash('message', "Mise à jour de votre profil");
            return back();
    }

    public function passwordUpdate(Request $request){


        $user = Auth::user();
        if($request->password == $request->confirm_password){
            $user->password = Hash::make(($request->password));

            $user->update();

             Session::flash('message', "Mise à jour de votre mot de passe");
                return back();
        }
        else{
            Session::flash('error', "Votre mot de passe de confirmation ne correspond pas");
                return back();
        }

    }

    public function contactInfoStore(Request $request){

        $contact = new Contact();
        $contact->user_id = Auth::user()->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        if( $contact->save()){
            Session::flash('message', "Vos données envoyer ");
            return back();
        }
        else{
            Session::flash('error', "Vos données ne sont pas envoyées");
           return back();
        }


    }



}

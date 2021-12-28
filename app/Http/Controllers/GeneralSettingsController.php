<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Funfact;
use App\FAQ;
use App\Jobber;
use App\Galery;
use App\Offers;
use App\User;
use App\Contact;
use App\Video;
use App\CourseEnroll;
use App\Document;
use File;
use Response;
use Illuminate\Support\Facades\Storage;
use App\ChekOut;
use App\Pricing;
use App\Features;
use App\Website;
use App\CourseCategory;
use Validator;
use Session;


class GeneralSettingsController extends Controller
{
    public function aboutCreate()
    {       $about = About::first();
        return view('admin.front.about',compact('about'));
    }
    public function aboutStore(Request $request)
    {
        $chek = About::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image1'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image2'] = 'admin/about/' . $name;
        }

        $about = About::create($input);

        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{
        $about = About::first();

        $about->description = $request->description;
        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $about->image1 = 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $about->image2 = 'admin/about/' . $name;
        }

        $about->update();

        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

  public function funfactCreate()
    {       $funFact = Funfact::first();
        return view('admin.front.funfact',compact('funFact'));
    }
    public function funfactStore(Request $request)
    {
        $chek = Funfact::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['backGroundImage'] = 'admin/about/' . $name;
        }


        $funfact = Funfact::create($input);

        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{
        $funFact = Funfact::first();

        $funFact->title1 = $request->title1;
        $funFact->title2 = $request->title2;
        $funFact->title3 = $request->title3;
        $funFact->title4 = $request->title4;
        $funFact->counter1 = $request->counter1;
        $funFact->counter2 = $request->counter2;
        $funFact->counter3 = $request->counter3;
        $funFact->counter4 = $request->counter4;
        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $funFact->backGroundImage = 'admin/about/' . $name;
        }

        $funFact->update();

        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}


public function faqCreate()
    {       $faq = FAQ::first();
        return view('admin.front.faq',compact('faq'));
    }
    public function faqStore(Request $request)
    {
        $chek = FAQ::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image'] = 'admin/about/' . $name;
        }


        $faq = FAQ::create($input);

        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{
        $faq = FAQ::first();

        $faq->question1 = $request->question1;
        $faq->question2 = $request->question2;
        $faq->question3 = $request->question3;
        $faq->question4 = $request->question4;
        $faq->answer1 = $request->answer1;
        $faq->answer2 = $request->answer2;
        $faq->answer3 = $request->answer3;
        $faq->answer4 = $request->answer4;
        $faq->description = $request->description;
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $faq->image = 'admin/about/' . $name;
        }

        $faq->update();

        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}


public function jobberCreate()
    {       $jobber = Jobber::first();
        return view('admin.front.jobber',compact('jobber'));
    }
    public function jobberStore(Request $request)
    {


        $input = $request->all();
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['backGroundImage'] = 'admin/about/' . $name;
        }

        $jobber = Jobber::create($input);

        Session::flash('message', "Vos données enregistrées");
        $jobber = Jobber::all();
        return view('admin.front.jobber.index',compact('jobber'));




}

public function galeryCreate()
    {       $galery = Galery::first();
        return view('admin.front.galery',compact('galery'));
    }
    public function galeryStore(Request $request)
    {
        $chek = Galery::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image1'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image2'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('image3')) {

            $image1 = $request->file('image3');
            $name = time() . 'image3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image3'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('image4')) {

            $image1 = $request->file('image4');
            $name = time() . 'image4' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image4'] = 'admin/about/' . $name;
        }
        if ($request->hasfile('image5')) {

            $image1 = $request->file('image5');
            $name = time() . 'image5' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image5'] = 'admin/about/' . $name;
        }

        if ($request->hasfile('image6')) {

            $image1 = $request->file('image6');
            $name = time() . 'image6' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image6'] = 'admin/about/' . $name;
        }

        $galery = Galery::create($input);

        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{
        $galery = Galery::first();

        $galery->description = $request->description;

        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image1 = 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image2  = 'admin/about/' . $name;
        }
        if ($request->hasfile('image3')) {

            $image1 = $request->file('image3');
            $name = time() . 'image3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image3  = 'admin/about/' . $name;
        }
        if ($request->hasfile('image4')) {

            $image1 = $request->file('image4');
            $name = time() . 'image4' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image4 = 'admin/about/' . $name;
        }
        if ($request->hasfile('image5')) {

            $image1 = $request->file('image5');
            $name = time() . 'image5' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image5 = 'admin/about/' . $name;
        }

        if ($request->hasfile('image6')) {

            $image1 = $request->file('image6');
            $name = time() . 'image6' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $galery->image6 = 'admin/about/' . $name;
        }


        $galery->update();

        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function priceCreate()
    {       $price = Pricing::first();
        return view('admin.front.pricing',compact('price'));
    }
    public function priceStore(Request $request)
    {
        $chek = Pricing::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        $price = Pricing::create($input);
        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{

        $price = Pricing::first();

        $price->pricingDescription = $request->pricingDescription;
        $price->price1 = $request->price1;
        $price->pricingDetails11 = $request->pricingDetails11;
        $price->pricingDetails12 = $request->pricingDetails12;
        $price->pricingDetails13 = $request->pricingDetails13;
        $price->pricingDetails14 = $request->pricingDetails14;
        $price->pricingDetails15 = $request->pricingDetails15;
        $price->pricingTitle1 = $request->pricingTitle1;
        $price->pricingTitle2 = $request->pricingTitle2;
        $price->price2 = $request->price2;
        $price->pricingDetails21 = $request->pricingDetails21;
        $price->pricingDetails22 = $request->pricingDetails22;
        $price->pricingDetails23 = $request->pricingDetails23;
        $price->pricingDetails24 = $request->pricingDetails24;
        $price->pricingDetails25 = $request->pricingDetails25;
        $price->pricingTitle3 = $request->pricingTitle3;
        $price->price3 = $request->price3;
        $price->pricingDetails31 = $request->pricingDetails31;
        $price->pricingDetails32 = $request->pricingDetails32;
        $price->pricingDetails33 = $request->pricingDetails33;

        $price->pricingDetails34 = $request->pricingDetails34;
        $price->pricingDetails35 = $request->pricingDetails35;
        $price->pricingTitle4 = $request->pricingTitle4;
        $price->price4 = $request->price4;
        $price->pricingDetails41 = $request->pricingDetails41;
        $price->pricingDetails42 = $request->pricingDetails42;
        $price->pricingDetails43 = $request->pricingDetails43;
        $price->pricingDetails44 = $request->pricingDetails44;
        $price->pricingDetails45 = $request->pricingDetails45;

        $price->update();
        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function vedioCreate()
    {       $video = Video::first();
        return view('admin.front.video',compact('video'));
    }
    public function vedioStore(Request $request)
    {
        $chek = Video::get();
        if($chek->isEmpty()) {
        $input = $request->all();

        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['backGroundImage']  = 'admin/about/' . $name;
        }

        $video = Video::create($input);
        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{

        $video = Video::first();

        $video->title = $request->title;
        $video->video = $request->video;


        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $video->backGroundImage  = 'admin/about/' . $name;
        }

        $video->update();
        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function courseCreate()
    {       $course = CourseCategory::first();
        return view('admin.front.courseCategory',compact('course'));
    }
    public function courseStore(Request $request)
    {
        $chek = CourseCategory::get();
        if($chek->isEmpty()) {
        $input = $request->all();

        $course = CourseCategory::create($input);
        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{

        $course = CourseCategory::first();

        $course->category1 = $request->category1;
        $course->category2 = $request->category2;
        $course->category3 = $request->category3;
        $course->category4 = $request->category4;
        $course->description1 = $request->description1;
        $course->description2 = $request->description2;
        $course->description3 = $request->description3;
        $course->description4 = $request->description4;


        $course->update();
        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function featureCreate()
    {       $feature = Features::first();
        return view('admin.front.feature',compact('feature'));
    }
    public function featureStore(Request $request)
    {
        $chek = Features::get();
        if($chek->isEmpty()) {
        $input = $request->all();
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $input['image'] = 'admin/about/' . $name;
        }

        $feature = Features::create($input);
        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{

        $feature = Features::first();

        $feature->title1 = $request->title1;
        $feature->title2 = $request->title2;
        $feature->title3 = $request->title3;
        $feature->title4 = $request->title4;
        $feature->title5 = $request->title5;
        $feature->title6 = $request->title6;
        $feature->description1 = $request->description1;
        $feature->description2 = $request->description2;
        $feature->description3 = $request->description3;
        $feature->description4 = $request->description4;
        $feature->description5 = $request->description5;
        $feature->description6 = $request->description6;

        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $feature->image = 'admin/about/' . $name;
        }


        $feature->update();
        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function settingCreate()
    {       $setting = Website::first();
        return view('admin.front.setting',compact('setting'));
    }
    public function settingStore(Request $request)
    {
        $chek = Website::get();
        if($chek->isEmpty()) {
        $input = $request->all();


        if ($request->hasfile('logo')) {

            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['logo'] = 'admin/setting/' . $name;
        }
        if ($request->hasfile('footerBackGroundImage')) {

            $image1 = $request->file('footerBackGroundImage');
            $name = time() . 'footerBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['footerBackGroundImage'] = 'admin/setting/' . $name;
        }
        if ($request->hasfile('jooberBackGroundImage')) {

            $image1 = $request->file('jooberBackGroundImage');
            $name = time() . 'jooberBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['jooberBackGroundImage'] = 'admin/setting/' . $name;
        }
        if ($request->hasfile('courseBackGroundImage')) {

            $image1 = $request->file('courseBackGroundImage');
            $name = time() . 'courseBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['courseBackGroundImage'] = 'admin/setting/' . $name;
        }

        if ($request->hasfile('articleImage1')) {

            $image1 = $request->file('articleImage1');
            $name = time() . 'articleImage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['articleImage1'] = 'admin/setting/' . $name;
        }

        if ($request->hasfile('articleImage2')) {

            $image1 = $request->file('articleImage2');
            $name = time() . 'articleImage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['articleImage2'] = 'admin/setting/' . $name;
        }

        if ($request->hasfile('articleImage3')) {

            $image1 = $request->file('articleImage3');
            $name = time() . 'articleImage3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['articleImage3'] = 'admin/setting/' . $name;
        }

        if ($request->hasfile('simage1')) {

            $image1 = $request->file('simage1');
            $name = time() . 'simage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['simage1'] = 'admin/setting/' . $name;
        }
        if ($request->hasfile('simage2')) {

            $image1 = $request->file('simage2');
            $name = time() . 'simage2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['simage2'] = 'admin/setting/' . $name;
        }
        if ($request->hasfile('simage3')) {

            $image1 = $request->file('simage3');
            $name = time() . 'simage3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $input['simage3'] = 'admin/setting/' . $name;
        }

        $setting = Website::create($input);
        Session::flash('message', "Vos données enregistrées");
        return back();
    }


    else{

        $setting = Website::first();

        $setting->phone1 = $request->phone1;
        $setting->email = $request->email;
        $setting->startTime = $request->startTime;
        $setting->endTime = $request->endTime;
        $setting->aboutDescription = $request->aboutDescription;
        $setting->address = $request->address;
        $setting->phone2 = $request->phone2;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->articleBlogTitle1 = $request->articleBlogTitle1;
        $setting->articleDescription1 = $request->articleDescription1;
        $setting->articleBlogTitle2 = $request->articleBlogTitle2;
        $setting->articleDescription2 = $request->articleDescription2;
        $setting->articleBlogTitle3 = $request->articleBlogTitle3;
        $setting->articleDescription3 = $request->articleDescription3;
        $setting->courseDescription = $request->courseDescription;


        if ($request->hasfile('logo')) {

            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->logo = 'admin/setting/' . $name;
        }
        if ($request->hasfile('footerBackGroundImage')) {

            $image1 = $request->file('footerBackGroundImage');
            $name = time() . 'footerBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->footerBackGroundImage = 'admin/setting/' . $name;
        }
        if ($request->hasfile('jooberBackGroundImage')) {

            $image1 = $request->file('jooberBackGroundImage');
            $name = time() . 'jooberBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->jooberBackGroundImage = 'admin/setting/' . $name;
        }

        if ($request->hasfile('courseBackGroundImage')) {

            $image1 = $request->file('courseBackGroundImage');
            $name = time() . 'courseBackGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->courseBackGroundImage = 'admin/setting/' . $name;
        }
        if ($request->hasfile('articleImage1')) {

            $image1 = $request->file('articleImage1');
            $name = time() . 'articleImage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->articleImage1 = 'admin/setting/' . $name;
        }

        if ($request->hasfile('articleImage2')) {

            $image1 = $request->file('articleImage2');
            $name = time() . 'articleImage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->articleImage2 = 'admin/setting/' . $name;
        }

        if ($request->hasfile('articleImage3')) {

            $image1 = $request->file('articleImage3');
            $name = time() . 'articleImage3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->articleImage3 = 'admin/setting/' . $name;
        }

        if ($request->hasfile('simage1')) {

            $image1 = $request->file('simage1');
            $name = time() . 'simage1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->simage1 = 'admin/setting/' . $name;
        }
        if ($request->hasfile('simage2')) {

            $image1 = $request->file('simage2');
            $name = time() . 'simage2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->simage2 = 'admin/setting/' . $name;
        }
        if ($request->hasfile('simage3')) {

            $image1 = $request->file('simage3');
            $name = time() . 'simage3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $setting->simage3 = 'admin/setting/' . $name;
        }



        $setting->update();
        Session::flash('message', "Votre mise à jour de données");
        return back();


    }

}

public function documentCreate()
    {       $users = User::where('role','=',1)->get();
        return view('admin.document.create',compact('users'));
    }
    public function documentStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file'  =>  'max:5024',

               ]);

            if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)
                         ->withInput();
         }
        $document = new Document();

        $document->user_id = $request->user_id;
        $document->title = $request->title;
        if ($request->hasfile('file')) {

            $image1 = $request->file('file');
            $name = time() . 'file' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $document->file = 'admin/setting/' . $name;
        }
         if($document->save()){
        Session::flash('message', "Vos données sauvegardées");
        $document = Document::all();
        return view('admin.document.index',compact('document'));
          }
        else{
            Session::flash('error', "Vos données ne sont pas enregistrées");
            return back();
        }
    }

    public function documentIndex()

    {       $document = Document::all();
        return view('admin.document.index',compact('document'));
    }
    public function documentEdit($id)

    {       $document = Document::where('id','=',$id)->first();
        $users = User::where('role','=',1)->get();
        return view('admin.document.edit',compact('document','users'));
    }
    public function documentUpdate(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'file'  =>  'max:5024',

               ]);

            if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)
                         ->withInput();
         }
         $document = Document::where('id','=',$id)->first();

        $document->user_id = $request->user_id;
        $document->title = $request->title;
        if ($request->hasfile('file')) {

            $image1 = $request->file('file');
            $name = time() . 'file' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $document->file = 'admin/setting/' . $name;
        }
         if($document->save()){
        Session::flash('message', "Votre mise à jour de données");
        $document = Document::all();
        return view('admin.document.index',compact('document'));
          }
        else{
            Session::flash('error', "Vos données ne sont pas mises à jour");
            return back();
        }
    }

    public function documentDelete($id)

    {       $document = Document::where('id','=',$id)->first();
         $document->delete();
        Session::flash('error', "Vos données ne sont pas mises à jour");
            return back();

    }
    public function downloadPath($path)
{                  dd($path);
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). $Attachment;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'filename.pdf', $headers);
}


    public function enrollmentDetailsIndex()
    {       $details = ChekOut::all();

        return view('admin.enrolmantDetails.index',compact('details'));
    }
    public function enrollmentDetailsDelete($id)
    {   $details = ChekOut::where('id','=',$id)->first();
        $details->delete();
        Session::flash('error', "Vos données supprimer");
        return back();
    }
    public function offersCreate()
    {      $offers = Offers::first();
       return view('admin.offers.create',compact('offers'));
    }
    public function offersIndex()
    {   $offers = Offers::all();
        return view('admin.offers.index',compact('offers'));
    }
    public function offersStore(Request $request)
    {
        $chek = Offers::get();

        if($chek->isEmpty()) {
        $offers = new Offers();

        $offers->title = $request->title;
        $offers->date = $request->date;
        $offers->link = $request->link;
        $offers->oldPrice = $request->oldPrice;
        $offers->newPrice = $request->newPrice;

        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $offers->image = 'admin/setting/' . $name;
        }

        if($offers->save()){
            Session::flash('message', "Vos données sauvegardées");
            return back();
        }
        else{
            Session::flash('error', "Vos données ne sont pas enregistrées");
           return back();
        }
    }

    else{
        $offers = Offers::first();

        $offers->title = $request->title;
        $offers->date = $request->date;
        $offers->link = $request->link;
        $offers->oldPrice = $request->oldPrice;
        $offers->newPrice = $request->newPrice;

        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $offers->image = 'admin/setting/' . $name;
        }

        if($offers->update()){
            Session::flash('message', "Votre mise à jour de données");
            return back();
        }
        else{
            Session::flash('error', "Vos données ne sont pas mises à jour");
           return back();
        }

    }

    }

    public function offersDelete($id)
    {   $offers = Offers::where('id','=',$id)->first();
        $offers->delete();
        Session::flash('error', "Vos données supprimer");
        return back();
    }
    public function offersEdit($id)
    {   $offers = Offers::where('id','=',$id)->first();

        return view('admin.offers.edit',compact('offers'));
    }
    public function offersUpdate( Request $request, $id)
    {   $offers = Offers::where('id','=',$id)->first();

        $offers->title = $request->title;
        $offers->date = $request->date;
        $offers->link = $request->link;

        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/setting/';
            $image1->move($destinationPath, $name);
            $offers->image = 'admin/setting/' . $name;
        }

        if($offers->update()){
            Session::flash('message', "Votre mise à jour de données");
            $offers = Offers::all();
        return view('admin.offers.index',compact('offers'));
        }
        else{
            Session::flash('error', "Vos données ne sont pas mises à jour");
           return back();
        }
    }

    public function userMessages()
    {      $contact = Contact::get();

       return view('admin.messages.index',compact('contact'));
    }
    public function messageDelete($id)
    {   $contact = Contact::where('id','=',$id)->first();
        $contact->delete();
        Session::flash('error', "Vos données supprimer");
        return back();
    }
    public function allStudents()
    {      $users = User::Where('role','=',1)->get();
       return view('admin.users.index',compact('users'));
    }
    public function userDelete($id)
    {   $users = User::where('id','=',$id)->first();
        $users->status = 0;
        $users->update();
        Session::flash('error', "Vos données supprimer");
        return back();
    }
}

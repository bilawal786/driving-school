<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Website;
use App\ChekOut;
use App\Document;
use App\CourseEnroll;
use App\User;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
     
    }
    public function frontIndex()
    {
        $website = Website::first();
        $document = Document::where('user_id','=',Auth::user()->id)->get();
        $checkOut = ChekOut::where('user_id','=',Auth::user()->id)->get();
        return view('front.dashboard',compact('website','checkOut','document'));
     
    }
    
    public function checkOut($id)
    {  
        $user = Auth::user();
        $website = Website::first();
        $courses = CourseEnroll::where('id','=',$id)->first();
        $total = $courses->price;
        if(isset($total)){
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.checkOut',compact('user','website','courses','intent'));
     
    }
    public function checkOutStore(Request $request)
    {  
        $checkOut = new ChekOut();

        $checkOut->user_id = $request->user_id;
        $checkOut->course_id = $request->course_id;
        $checkOut->courseTitle = $request->courseTitle;
        $checkOut->total = $request->total;
        $checkOut->pay = $request->pay;
        $checkOut->save();

        return view('front.completePaymant');
        
        
     
    }

    public function downloadPath($id)
{      
                
    $document = Document::where('id','=',$id)->first();
    
    $file=  $document->file;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'filename.pdf', $headers);
}
}

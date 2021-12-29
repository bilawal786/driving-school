<?php

namespace App\Http\Controllers;

use App\Instructor;
use App\StudenDocument;
use Illuminate\Http\Request;
use Auth;
use App\Website;
use App\ChekOut;
use App\Document;
use App\CourseEnroll;
use App\User;
use Response;
use Validator;
use Session;

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
        $user = User::where('role','=',1)->where('status','=',1)->count();
        $instructor = Instructor::count();
        $courses = CourseEnroll::count();
        return view('home',compact('user','instructor','courses'));

    }
    public function frontIndex()
    {   $user_id = Auth::user()->id;
        $website = Website::first();
        $document = Document::where('user_id','=',$user_id)->get();
        $studentDocument = StudenDocument::where('user_id','=',$user_id)->get();
        $checkOut = ChekOut::where('user_id','=',Auth::user()->id)->get();
        return view('front.dashboard',compact('website','checkOut','document','studentDocument'));

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
    public function downloadPathStudent($id)
    {

        $document = StudenDocument::where('id','=',$id)->first();

        $file=  $document->file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'filename.pdf', $headers);
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
        $document = new  StudenDocument();
        $document->user_id = Auth::user()->id;
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
            return  back();
        }

    }

}

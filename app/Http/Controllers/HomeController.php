<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Website;
use App\User;

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
        if(Auth::check()){
            if(Auth::user()->role===0){
                return view('home');
        }
            else {
                $website = Website::first();
           return view('front.dashboard',compact('website'));
            }
            
        }
        
    }
}

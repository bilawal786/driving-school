<?php

namespace App\Http\Middleware;

use Closure;
use App\Website;
use Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role =='1'){
            $website = Website::first();
            
            return response()->view('front.dashboard',compact('website'));
            }
            else{
                return $next($request);
            }
    }
}

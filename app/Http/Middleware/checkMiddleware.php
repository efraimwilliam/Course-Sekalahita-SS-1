<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checkMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $gender)
    {
        //dd(Auth::user());
        //if(isset(Auth::user()))
        if(Auth::user()!=null){
            if(Auth::user()->email=='efraimwilliam@gmail.com'){
                if($gender !='perempuan'){
                    return $next($request);
                }
                return redirect('/logins');
                
            }
            //else
            return redirect('/logins');
        }
        return redirect('/logins');
    }
}

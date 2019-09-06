<?php

namespace App\Http\Middleware;

use Closure;

class Country
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
        //if($country = $request->cookie('country'))
        //{
        //    config(['app.country' => $country]);
        //}
		//
		//if($country = $request->route('country_code')){
		//	config(['app.country' => $country]);
		//}
		//
        //return $next($request);
		
		if(session()->has('country_code'))
        {
            config(['app.country' => session()->get('country_code')]);
        }
		
		if($country = $request->route('country_code')){
			config(['app.country' => $country]);
			session()->put('country_code', $country);
		}
		
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Setlocal
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

//        if (!empty($_SERVER['HTTP_CLIENT_IP']))
//        {
//            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
//        }
//        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
//        {
//            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
//        }
//        else
//        {
//            $ip_address = $_SERVER['REMOTE_ADDR'];
//        }
//
//        $json       = 'en';
//        $details    = json_decode($json);
//
//        if(isset($details->country)){
//            $country =$details->country;
//            if($country =="BD"){
//                \App::setlocale('bn');
//                session()->put('locale', 'bn');
//            }
//            else{
//
//                \App::setlocale('en');
//            }
//        }
//
//
//        $session=session()->get('locale');
//        if($session=="en"){
//        \App::setlocale('en');
//        }
//        elseif($session=="bn"){
//            \App::setlocale('bn');
//        }
//        else{
//            \App::setlocale('en');
//        }
//        return $next($request);
    }
}
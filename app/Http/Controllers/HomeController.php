<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        $json       = file_get_contents("http://ipinfo.io/$ip_address");
        $details    = json_decode($json);

        if(isset($details->country)){
            $country =$details->country;

            if($country=="BD"){
                session()->put('locale', 'bn');
            }
            else{
                session()->put('locale', 'en');
            }
        }
        return view('home.index');
    }

    public function changelanguage(){
        session()->put('locale', 'en');


        return view('home.languagepage');

    }

    public function languagechagnge_to($ln){
        if($ln=="_bn"){
            session()->put('locale', 'bn');
        }
        if($ln=="_en"){
            session()->put('locale', 'en');
        }

        return view('home.index');

    }


}

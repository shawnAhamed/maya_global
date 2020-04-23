<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            dd($ip_address);
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            dd($ip_address);
        }
        else
        {
            $ip_address = $_SERVER['REMOTE_ADDR'];
            //dd($ip_address);
        }
        $real_ip_adress="42.0.7.248";

        $cip = $real_ip_adress;
        $iptolocation = 'http://www.geoplugin.net/xml.gp?ip=' . $cip;
        $creatorlocation = file_get_contents($iptolocation);
        dd($creatorlocation);


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

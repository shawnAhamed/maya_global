<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Adapter\Local;
use App;
use Illuminate\Support\Facades\Session;

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

        dd($ip_address);
        $json       = file_get_contents("http://ipinfo.io/$ip_address");
        $details    = json_decode($json);
        dd($details);


        return view('en.index');
    }

    public function expert(){
        return view('en.expert');
    }
    public function aboutus() {
        return view('en.aboutusen');
    }

    public function services() {
        return view('en.services');
    }
    public function corona(){
        return view('en.corona');
    }
    public function test(){
        return view('bn.test');
    }

}

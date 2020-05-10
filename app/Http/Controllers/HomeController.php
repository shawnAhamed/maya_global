<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Adapter\Local;
use App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
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

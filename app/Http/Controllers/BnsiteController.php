<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BnsiteController extends Controller
{
    public function index(){
        return view('bn.indexbn');
    }
    public function expert(){
        return view('bn.expert');
    }
    public function services(){
        return view('bn.servicesbn');

    }
    public function corona(){
        return view('bn.coronabn');

    }

    public function about(){
        return view('bn.aboutusbn');

    }


}

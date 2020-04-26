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


}

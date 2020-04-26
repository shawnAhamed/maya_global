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

}

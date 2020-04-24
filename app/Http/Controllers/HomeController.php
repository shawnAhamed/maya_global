<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Adapter\Local;
use App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }


    public function index2(){
        dd(app()->getLocale());

        return view('home.services');
    }
    public function changelanguage(){

        return view('home.languagepage');

    }

    public function languagechagnge_to($ln){

        if($ln=="_bn"){
            session()->put('locale', 'bn');
        }
        if($ln=="_en"){
            session()->put('locale', 'en');
        }
        return redirect('/');

    }


}

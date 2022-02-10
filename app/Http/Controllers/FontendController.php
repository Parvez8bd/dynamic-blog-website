<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function home(){

        return view('website.home');
    }
    public function about(){

        return view('website.about');
    }
    public function admin(){

        return view('website.admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function photo(){
        return view('frontend.gallery');
    }

    public function event(){
        return view ('frontend.events');
    }

    public function boardM(){
        return view('frontend.board');
    }

    public function manage(){
        return view('frontend.management');
    }
    //
}

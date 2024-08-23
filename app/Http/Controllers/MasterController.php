<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index (){
        return view('home');
    }

    public function journals (){
        return view('journals');
    }

    public function conferences (){
        return view('conferences');
    }

    public function news (){
        return view('news');
    }

    public function newssingle (){
        return view('news-single');
    }

    public function ourteam (){
        return view('ourteam');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index (){
        return view('navbar.home');
    }

    public function journals (){
        return view('navbar.journals');
    }

    public function conferences (){
        return view('navbar.conferences');
    }

    public function news (){
        return view('navbar.news');
    }

    public function newssingle (){
        return view('navbar.news-single');
    }

    public function ourteam (){
        return view('navbar.ourteam');
    }

}

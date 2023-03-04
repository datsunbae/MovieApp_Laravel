<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function category(){
        return view('pages.category');
    }
    public function genre(){
        return view('pages.genre');
    }
    public function country(){
        return view('pages.country');
    }
    public function movies(){
        return view('pages.movies');
    }
    public function tvshows(){
        return view('pages.tvshows');
    }
    public function signup(){
        return view('pages.signup');
    }
    public function signin(){
        return view('pages.signin');
    }
    public function forgotpassword(){
        return view('pages.forgotpassword');
    }
}

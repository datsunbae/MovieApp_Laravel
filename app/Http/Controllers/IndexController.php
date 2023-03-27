<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Movie;
use DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $phimhot = Movie::where('phim_hot',1)->where('status',1)->get();
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();
        $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();
    	return view('pages.home', compact('category','genre','country','category_home','phimhot'));
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

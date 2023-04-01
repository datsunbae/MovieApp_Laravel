<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Movie;
use DB;

class IndexController extends Controller
{
    public function home(){
        $moviehot = Movie::where('phim_hot',1)->where('status',1)->get();
        
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();
    	return view('pages.home', compact('category','genre','country','category_home','moviehot'));
    }
    public function category($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $cate_slug = Category::where('slug',$slug)->first();
        $movie = Movie::where('category_id',$cate_slug->id)->paginate(40);
    	return view('pages.category', compact('category','genre','country','cate_slug','movie'));
    }
    public function genre($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $genre_slug = Genre::where('slug',$slug)->first();
        $movie = Movie::where('genre_id',$genre_slug->id)->paginate(40);
    	return view('pages.genre', compact('category','genre','country','genre_slug','movie'));
    }
    public function country($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $country_slug = Country::where('slug',$slug)->first();
        $movie = Movie::where('country_id',$country_slug->id)->paginate(40);
    	return view('pages.country', compact('category','genre','country','country_slug','movie'));
    }
    public function movies($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();
        $movie = Movie::with('category','genre','country')->where('slug',$slug)->where('status',1)->first();
    	return view('pages.movies', compact('category','genre','country','movie'));
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

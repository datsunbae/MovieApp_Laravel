<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Episode;
use App\Models\Movie;

class IndexController extends Controller
{
    public function home(){ 
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();
        
        $category_le = Category::with('movie')->orderBy('id','DESC')->where('id',2)->get();
        $category_hoathinh = Category::with('movie')->orderBy('id','DESC')->where('id',4)->get();
        $category_chieurap = Category::with('movie')->orderBy('id','DESC')->where('id',6)->get();

        $movie = Movie::with('category','genre','country','episode')->where('status',1)->first();
        $episode = Episode::where('movie_id',$movie->id)->orderBy('episode','ASC')->get();
        $episode_movie = Episode::with('movie')->where('movie_id',$movie->id)->orderBy('episode','ASC')->take(1)->first();

        $moviehot = Movie::where('phim_hot',1)->where('status',1)->get();
        $movie_new = Movie::where('status',1)->orderBy('id','DESC')->get();

    	return view('pages.home', compact('category','genre','country','category_le','category_hoathinh','category_chieurap','moviehot','movie_new','episode_movie','movie'));
    }
    public function category($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $cate_slug = Category::where('slug',$slug)->first();
        $movie = Movie::where('category_id',$cate_slug->id)->paginate(40);
        
        $movie_1 = Movie::with('category','genre','country','episode')->where('slug',$slug)->where('status',1)->first();


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
        if(isset($_GET['tap'])){
            $tap = $_GET['tap'];
        }
        else{
            $tap = 1;
        }
        $tap = substr($tap, 0,9);

        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();
        $movie = Movie::with('category','genre','country','episode')->where('slug',$slug)->where('status',1)->first();

        $episode = Episode::where('movie_id',$movie->id)->orderBy('episode','ASC')->get();
        $episode_watch = Episode::where('movie_id',$movie->id)->where('episode',$tap)->first();
        $episode_movie = Episode::with('movie')->where('movie_id',$movie->id)->orderBy('episode','ASC')->take(1)->first();

    	return view('pages.movies', compact('category','genre','country','movie','episode','episode_movie','episode_watch'));
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

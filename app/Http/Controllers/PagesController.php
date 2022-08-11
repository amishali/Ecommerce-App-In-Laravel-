<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{
    //
    public function index(){
        //  $title = "WELCOME TO MY BLOG PAGE";
          return view('index'); // compact('title')
      }
      public function about(){
        //$title= "About us";
        return view('about'); //->with('title' , $title);
    }
    public function contact(){
        return view('contact');
    }
    public function products(){
        return view('products');
    }
    public function singleproduct(){
        return view('singleproduct');
    }
}

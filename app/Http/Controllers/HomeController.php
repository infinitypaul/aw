<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  public  function getIndex(){
    return view('index');
}  

public  function getAbout(){
    return view('about');
}  

public  function getContact(){
    return view('contact');
}  

 public  function getPricing(){
    return view('pricing');
}

  public  function getServices(){
    return view('services');
} 

 public  function getFaq(){
    return view('faq');
} 

public  function getBlog(){
    return view('blog');
}  

public  function getBlogs(){
    return view('blog-1');
}  
}

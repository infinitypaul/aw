<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
<<<<<<< HEAD
public  function getIndex(){
    return view('welcome');
}


=======
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
>>>>>>> c9b4a53d93b8a2b75acb11bf2641581842eae2ad
}

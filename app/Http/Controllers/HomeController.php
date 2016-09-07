<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getIndex()
    {
        return view('index');
    }
	
	 public function getAbout()
    {
        return view('about');
    }
	
	 public function getContact()
    {
        return view('contact');
    }
	
	 public function getServices()
    {
        return view('services');
    }
	
	 public function getFaq()
    {
        return view('faq');
    }
	
	 public function getBlog()
    {
        return view('blog');
    }
	
	 public function getBlogs()
    {
        return view('blog-1');
    }
	
	 public function getPricing()
    {
        return view('pricing');
    }
}

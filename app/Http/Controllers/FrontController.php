<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
    public function shop()
    {
        return view('shop');
    }
    public function product()
    {
        return view('product');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
    public function faq()
    {
        return view('faq');
    }
    public function user()
    {
        return view('user');
    }
    
    

    // method selanjutnya untuk bagian front
}

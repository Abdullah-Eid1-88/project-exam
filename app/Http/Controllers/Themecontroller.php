<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Themecontroller extends Controller
{
   public function home(){
        return view('theme.home');
    }
    public function category(){
        return view('theme.category');
    }
    public function contact(){
        return view('theme.contact');
    }
    public function single_blog(){
        return view('theme.single-blog');
    }
    public function login(){
        return view('theme.login');
    }
    public function register(){
        return view('theme.register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function register(){
        return view('pages.register');
    }

    public function browse_courses(){
        return view('pages.browseC');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about');
    }

    public function login(){
        return view('pages.login');
    }

    public function editProfile(){
        return view('pages.editProfile');
    }
    
    public function Courses(){
        return view('pages.courses');
    }

}

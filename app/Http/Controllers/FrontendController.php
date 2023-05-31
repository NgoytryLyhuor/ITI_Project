<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        return view('frontend.index');
    }
    public function more_bio(){
        return view('frontend.more_bio');
    }
    public function bio_details(){
        return view("frontend.bio_details");
    }
    public function student_login(){
        return view("frontend.student_login");
    }
    public function student_register(){
        return view("frontend.student_register");
    }
    public function about_us(){
        return view("frontend.about_us");
    }
}

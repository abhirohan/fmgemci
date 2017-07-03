<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ViewController(){
    	return view('login');
    }

    public function profileView(){
    	return view('profile');
    }

    public function signupView(){
    	return view('signup');
    }

    public function postListView(){
    	return view('post-list');
    }

    public function postView(){
    	return view('post-view');
    }

    public function contactUsView(){
    	return view('contact_us');
    }

    public function aboutUsView(){
    	return view('about_us');
    }
}

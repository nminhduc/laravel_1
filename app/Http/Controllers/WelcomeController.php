<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function contact(){
    	echo "This is contact page!";
    }
    public function about(){
    	return view('pages.about');
    }
}

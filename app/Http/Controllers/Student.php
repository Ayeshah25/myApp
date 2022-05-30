<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    function greet(){
    	// echo "Hello World";
    	return view('contact');
    }
    
}

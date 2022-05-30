<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; #targeting the table ogf posts


class Post extends Controller
{
    //

    function fetch(){
    		$data = Post::all(); #select * from Posts;
    		return view('view', ["d"] )
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class controller_Posts extends Controller
{
    //
    public function index(){
    	$post= Posts::all();
    	return view('blogPage', array('post'=>$post));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class controller_Posts extends Controller
{
    //
    public function index(){
    	//$post= Posts::all();
    	// get the most recent post first
    	$post = Posts::orderBy('id', 'DESC')->get();
    	return view('blog', array('post'=>$post));
    }
}

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

    public function single_post($id){

    	
    	// get all content if a particular post
    	$postBody= Posts::where('id',$id)->get();

    	//Load View File with all the information
    	return $postBody;
    }
}

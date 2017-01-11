<style type="text/css">
	.hline { width:100%; height:3px; background:#FF0000 }
</style>
{{--
This page contains the all blog post listed from database

--}}



@extends('blogLayout')

@section('blogPost')
	@foreach($post as $posts)

	{{-- Comment: Check if post is published r not --}}
	
	@if($posts["status"]=="PUBLISHED")
		<h2>
        	<a href="#">{{$posts["title"]}}</a>
        </h2>
        <p class="lead">by 
        	<a href="index.php">Start Bootstrap</a>
        </p>
         
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$posts["updated_at"]}}</p>
         
        @if($posts["image"]!=NULL)
	        <hr>
	        	<img class="img-responsive" src="storage/{{$posts["image"]}}" alt="">
	        <hr>
	    @endif

	           
        <p>{{strip_tags($posts["body"])}}</p>

        <a class="btn btn-primary" href="#">Read More 
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        @endif

        <br>
    @endforeach
@endsection




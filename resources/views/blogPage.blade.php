{{--
This page contains the all blog post listed from database

--}}


@ex tends('topNavigation')




@section('blogPost')
	@foreach($post as $posts)

	{{-- Comment: Check if post is published r not --}}
	
	@if($posts["status"]=="PUBLISHED")
		



        <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>{{$posts["title"]}}</h2>
                    <p>
                        <span class="glyphicon glyphicon-time"></span> 
                        Posted on {{$posts["updated_at"]}}
                    </p>

                    @if($posts["image"]!=NULL)
                        <hr>
                         <img class="img-responsive" src="storage/{{$posts["image"]}}" alt="">
                         <hr>
                    @endif

                    <p class="more">{{strip_tags($posts["body"])}}</p>
                    <span class="more_text"></span>

                </div><!--/.col-xs-6.col-lg-4-->
                
                <!--/.col-xs-6.col-lg-4-->
        </div><!--/row-->
    @endif

        <br>
    @endforeach
@endsection





         
        

	   

        




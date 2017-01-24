{{--
This page contains the all blog post listed from database

--}}


@section('blogPost')
	@foreach($post as $posts)

	{{-- Comment: Check if post is published r not --}}
	
    	@if($posts["status"]=="PUBLISHED")
            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2 style="color: #2b542c"> <a id="postID" href="blog/{{$posts["id"]}}">{{$posts["title"]}}</a></h2>
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
                    <a href="blog/{{$posts["id"]}}"> <span class="btn btn-default more_text">Read More&raquo;</span></a>


                </div><!--/.col-xs-6.col-lg-4-->
                
                <!--/.col-xs-6.col-lg-4-->
             </div><!--/row-->
        @endif

        <br>
    @endforeach


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('')</script>
    <script src="newVendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>

    <script type="text/javascript">

        // JS function to show Less text in the main content Page

        $(function(){ /* to make sure the script runs after page load */

            $('.more').each(function(event){ /* select all divs with the item class */

                var max_length = 15; /* set the max content length before a read more link will be added */
                var id= 2;

                if($(this).html().length > max_length){ /* check for content length */

                    var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
                    var long_content    = $(this).html().substr(max_length);

                    $(this).html(short_content+"....");

                }

            });
        });

        // Function ends

        // Function to redirect a single blog page


/*
        $("#read_more").click(function(){
            alert("The paragraph was clicked.");
        });
        */







    </script>




@endsection





         
        

	   

        




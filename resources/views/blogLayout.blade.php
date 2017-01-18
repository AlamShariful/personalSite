@extends('topNavigation')
@extends('mainLayout')
<!DOCTYPE html>
<html lang="en">
<head>
    
@include('head')
<title>Blog</title>

    
</head>

<body id="page-top" class="container-fluid"style="background-color:#EEEEEE">

    <!--div class="nav bar navbar-default navbar-fixed-top">
        @yi eld('name')
        @yie ld('options')
    </div-->
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">


    </div><!-- /.container -->
</nav><!-- /.navbar -->

<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>

    <div class="container container-fluid">
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            
            <div class="jumbotron">
                <h1>Change is the end result of all true learning.</h1>
                <p class="pull-right">-Leo Buscaglia
                </p>
            </div>
            @yield('blogPost')
        </div><!--/.col-xs-12.col-sm-9-->

         

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <a href="#" class="list-group-item active">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
            </div>
        </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <hr>

    

</div><!--/.container-->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="offcanvas.js"></script>

<script type="text/javascript">
    $(function(){ /* to make sure the script runs after page load */

        $('.more').each(function(event){ /* select all divs with the item class */

            var max_length = 15; /* set the max content length before a read more link will be added */

            if($(this).html().length > max_length){ /* check for content length */

                var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
                var long_content    = $(this).html().substr(max_length);

                $(this).html(short_content+
                        '<p><a class="btn btn-default read_more" data-toggle="toggle" href="#" role="button">Read More &raquo;</a></p>'+
                        '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */

                $(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */

                    event.preventDefault(); /* prevent the a from changing the url */
                    $(this).hide(); /* hide the read more button */
                    $(this).parents('.more').find('.more_text').show(); /* show the .more_text span */

                });

            }

        });


    });


</script>

</body>
</html>

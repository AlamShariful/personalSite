<!DOCTYPE html>
<html lang="en">
<head>
    
@include('head')
<title>Blog</title>

    
</head>

<body class="container-fluid"style="background-color:#EEEEEE">
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container" style="color: #9c1014">
efjskrjg

    </div><!-- /.container -->
</nav><!-- /.navbar -->

<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>

    <div class="container container-fluid">
    <div class="row row-offcanvas row-offcanvas-right">

        <!-- Main Layout Jumbotron -->
        <div class="col-xs-12 col-sm-9">

            @yield('blogpageJumbotron')
            @yield('blogPost')
            @yield('SingleblogPost')
        </div>
        <!--/.col-xs-12.col-sm-9-->


        @yield('sidebar')
        <!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <hr>

    

</div><!--/.container-->

    <footer>
        @include('footer')
    </footer>




</body>
</html>

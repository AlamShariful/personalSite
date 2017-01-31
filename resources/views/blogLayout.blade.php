
<!DOCTYPE html>
<html lang="en">
<head>

@include('head')


</head>

<body class="container-fluid"style="background-color:#EEEEEE">
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container" style="color: #9c1014">

        <div class="navbar-header">

            <a class="navbar-brand page-scroll " href="/"><strong>Home</strong></a>
            <a class="navbar-brand page-scroll " href="../blog"><strong>Blog</strong></a>
        </div>

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

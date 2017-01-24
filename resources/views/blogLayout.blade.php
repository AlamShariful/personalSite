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

    <footer>
        @include('footer')
    </footer>




</body>
</html>

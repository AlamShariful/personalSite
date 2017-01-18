@extends('topNavigation')
<!DOCTYPE html>
<html lang="en">

<style>
    .wrapper {
        width: 100%;
        background-color: #DFDFDF;
    }

    #mainImg {
        padding-top: 90px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100%;

    }

</style>

<head>

    @include('head')
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            @yield('name')
            @yield('options')
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!--This is the main section for banner Image-->
    @yield('bannerImage')
    <!--This is the main section for banner Image Ends-->
    
<!-- main page content -->

        @yield('who')
        @yield('what')

<!-- main page content Ends -->



    


    <footer>
        @include('footer');
    </footer>

    <!-- jQuery -->
    <script src="newVendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="newVendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/script.min.js"></script>






</body>

</html>




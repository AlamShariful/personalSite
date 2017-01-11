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

<body>
    
    <div class="container">

      <!-- Blog page content -->
    @yield('blogPost')

   <!-- Blog page content Ends-->
   </div>


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




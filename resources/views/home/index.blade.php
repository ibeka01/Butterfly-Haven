<!DOCTYPE html>
<html lang="en">

<head>
   @include('home.css')

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>

   <!-- header -->
   <header>
      @include('home.header')
   </header>

   <!-- banner -->
   @include('home.slider')

   <!-- about -->
   @include('home.about')

   <!-- our_room -->
   @include('home.room')

   <!-- our_room -->
   @include('home.favorite_room')

   <!-- gallery -->
   @include('home.service')

   <!-- gallery -->
   @include('home.galery')

   <!-- blog -->
   @include('home.blog')

   <!--  contact -->
   @include('home.contact')

   <!--  footer -->
   @include('home.footer')

   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->


   <script type="text/javascript">
      $(window).scroll(function() {
         sessionStorage.scrollTop = $(this).scrollTop();
      });
      $(document).ready(function() {
         if (sessionStorage.scrollTop != "undefined") {
            $(window).scrollTop(sessionStorage.scrollTop);
         }
      });
   </script>

</body>

</html>
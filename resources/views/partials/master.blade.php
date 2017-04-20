<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NULISTICE 2018</title>
<meta name="description" content="National University of Lesotho Science, Technology and Innovation Expo and Conference.">
  <base href="/">
 <link rel="icon" type="image/x-icon" href="favicon.ico">
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/revolution-slider.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/owl.carousel.min.css" rel="stylesheet" >
<link  href="/css/owl.theme.default.min.css" rel="stylesheet">
<link  href="/css/owl.css" rel="stylesheet">
<link href="{{mix('css/app.css')}}"  rel="stylesheet">
<link href="{{mix('css/helpers.css')}}" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Anton|Cinzel:900|Dancing+Script" rel="stylesheet">

<link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

 @include('partials.seo')

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
   
 	
     @include('partials.menu')
     @yield('content')
     @include('partials.sponsors')
     @include('partials.footer')
    <!--End Main Header -->
    
    <!-- Main Slider -->
   <!--<app-root>Loading...</app-root> -->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>
<script>
  window.Laravel={csrfToken:'{{csrf_token()}}'}
</script>
<script src={{mix('js/app.js')}}></script>

<script src="/js/jquery.js"></script> 
<script src="/js/bootstrap.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/typed.min.js"></script>
<script src="/js/script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/bootstrap-3.typehead.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyClJlIWcBjIz0wcRP_VAewoG3b21aatXXA"></script>
<script src="/js/googlemaps.js"></script>


 @yield('scripts')
 @include('partials.sponsors-scripts')
</body>
</html>

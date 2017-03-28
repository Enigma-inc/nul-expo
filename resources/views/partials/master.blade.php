<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NUL EXPO 2018</title>
  <base href="/">
 <link rel="icon" type="image/x-icon" href="favicon.ico">
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/revolution-slider.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/nul.css" rel="stylesheet">
<!--<link href="/css/owl.css" rel="stylesheet">-->
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader 
    <div class="preloader"></div>-->
 	
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


<script src="/js/jquery.js"></script> 
<script src="/js/bootstrap.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script>
$('#text-welcomes').slimScroll({
    size: '10px',
    height: '320px'
});
</script>
 @yield('scripts')

</body>
</html>

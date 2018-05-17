<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
@include('partials.google-analytics')
<title>NULISTICE 2018</title>
<meta name="description" content="National University of Lesotho Science, Technology and Innovation Expo and Conference.">
  <base href="/">
 <link rel="icon" type="image/x-icon" href="favicon.ico">
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/revolution-slider.css" rel="stylesheet">
<link href="/css/style.css?v=2" rel="stylesheet">
<link href="/css/owl.carousel.min.css" rel="stylesheet">
<link  href="/css/owl.theme.default.min.css" rel="stylesheet">
<link  href="/css/owl.css" rel="stylesheet">
<link href="{{mix('css/app.css')}}"  rel="stylesheet">
<link href="{{mix('css/helpers.css')}}" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/vendor/photobox/photobox.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/v/bs/dt-1.10.16/fh-3.1.3/r-2.2.1/sc-1.4.4/datatables.min.css">

<link href="https://fonts.googleapis.com/css?family=Anton|Cinzel:900|Dancing+Script" rel="stylesheet">
   @LaravelSweetAlertCSS

<link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

   @include('partials.seo')
</head>

<body>
<div class="page-wrapper" >
     <div>
         @include('partials.menu')
     @yield('content')
     </div>
     <div>
        @include('partials.footer')
     </div>
    <!--End Main Header -->

    <!-- Main Slider -->
   <!--<app-root>Loading...</app-root> -->

</div>



<!--Scroll to top-->
<div class="scroll-to-top"></div>
<script>
  window.Laravel={csrfToken:'{{csrf_token()}}'}
</script>
{{-- <script src="/js/jquery.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src={{mix('js/app.js')}}></script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/bootstrap-3.typehead.min.js"></script>
<script src="js/ui-block.js"></script>
<script src="js/shuffle.js"></script>
<script src="vendor/photobox/jquery.photobox.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



 @yield('scripts')
 @include('partials.sponsors-scripts')
 @LaravelSweetAlertJS
</body>
</html>

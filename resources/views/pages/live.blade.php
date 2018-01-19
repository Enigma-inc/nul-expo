<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
@include('partials.google-analytics')
<title>NULISTICE/RERIS 2018</title>
<meta name="description" content="National University of Lesotho Science, Technology and Innovation Expo and Conference.">
  <base href="/">
 <link rel="icon" type="image/x-icon" href="favicon.ico">
<!-- Stylesheets -->
<link href="{{mix('css/vuetify.css')}}" rel="stylesheet">
<link href="{{mix('css/helpers.css')}}" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/vendor/photobox/photobox.css" rel="stylesheet">

 <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

<link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />
<meta name="csrf-token" content="{{ csrf_token() }}">

   @include('partials.seo')
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<div class="page-wrapper" >
     <div id="app">
       <layout></layout>
     </div>
    <!--End Main Header -->

    <!-- Main Slider -->
   <!--<app-root>Loading...</app-root> -->

</div>

<script src="/js/jquery.js"></script>
<script src={{mix('js/app-live.js')}}></script>
<script src="vendor/photobox/jquery.photobox.js"></script>



 @yield('scripts')
</body>
</html>

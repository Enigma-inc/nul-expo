<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NULISTICE/RERIS 2018</title>

    <!-- Styles -->
    <link href="{{ mix('admin-assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('admin-assets/css/vendor.css') }}" rel="stylesheet">
    {!! Charts::styles() !!}

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container sm-margin-5">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('admin.home')}}">
                        NULISTICE/RERIS 2018 ADMIN
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       <li><a href="{{route('admin.home')}}">Abstracts</a></li>
                       <li><a href="{{route('admin.expo')}}">Expo Applications</a></li>
                       <li><a href="{{route('admin.exhibition')}}">Exhibition Applications</a></li>
                       <li><a href="{{route('generalEvents.index')}}">General</a></li>                       
                       <li><a href="{{route('nulisticeEvents.index')}}">Nulistice</a></li>                       
                       <li><a href="{{route('rerisEvents.index')}}">Reris</a></li>                                                                     
                       {{-- <li><a href="{{route('stats',['conference'=>'all'])}}">Statistics</a></li> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container sm-padding-right-5">
          @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('admin-assets/js/bundle.js') }}"></script>
    <script src="{{ mix('admin-assets/js/app.js') }}"></script>
    {!! Charts::scripts() !!}
    @if (isset($chart))
      {!! $chart->script() !!}
    @endif

</body>
</html>

<header class="main-header">
    	<div class="auto-container clearfix">
        	<!--Logo-->
            <div class="logo  clearfix" style="display:flex">
              <a href="{{route('home')}}"><img height="60px" src="/images/logo-ih.jpg?v=4" alt="NULISTICE 2020" title="NULISTICE 2020">
              <a href="{{route('home')}}"><img height="60px" src="/images/logo-nul.jpg?v=4" alt="NULISTICE 2020" title="NULISTICE 2020">
              </a>
            </div>
            
            <!--Main Menu-->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle margin-top-10" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse clearfix collapse" aria-expanded="false" style="height: 2px;">                                                                                              
                    <ul class="navigation">
                        <li class="{{ Request::path() == '/' ? 'current' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class=" dropdown {{ in_array(Request::path(), array('welcome','nulistice-concept','team','committees')) ? 'current' : '' }}"><a href="#">About</a>
                            <ul class="submenu padding-left-10">
                                <li>
                                    <a href="welcome">Welcome Note</a>
                                </li>
                                <li>
                                    <a href="nulistice-concept">NULISTICE Concept</a>
                                </li>
                                <li>
                                    <a href="team">Organising Team</a>
                                </li>
                                <li>
                                    <a href="committees">Scientific Committees</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li  class="{{ Request::path() == 'expo-and-exhibition' ? 'current' : '' }}">
                            <a href="expo-and-exhibition">Expo/Exhibition Register</a>
                        </li> --}}
                        <li  class="{{ Request::path() == 'proceedings' ? 'current' : '' }}">
                            <a href="/proceedings">Proceedings</a>
                        </li>
                        {{-- <li  class="{{ Request::path() == 'fees' ? 'current' : '' }}">
                            <a href="fees">Fees</a>
                        </li> --}}
                        {{-- <li  class="{{ Request::path() == 'accommodation' ? 'current' : '' }}">
                            <a href="accommodation">Accommodation</a>
                        </li> --}}
                        <li  class="{{ Request::path() == 'blog' ? 'current' : '' }}">
                            <a href="blog">Blog</a>
                        </li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="navigation">
                            <li class="{{ Request::path() == 'login' ? 'current' : '' }}">
                                <a href="login">Sign In</a>
                            </li>
                            <li class="{{ Request::path() == 'register' ? 'current' : '' }}">
                                <a href="register">Sign Up</a>
                            </li>
                        @else
                        @if (Auth::user()->is_admin)
                            {{-- <li class="{{ Request::path() == 'messages' ? 'current' : '' }} admin-menu">
                                <a href="messages" >Messages</a>
                            </li> --}}
                            <li class="{{ Request::path() == 'all-abstracts' ? 'current' : '' }} admin-menu">
                                <a href="{{route('admin.home')}}" >Admin Panel</a>
                            </li>
                            @endif
                            <li>
                                <a href="/profile">
                                    <span class="fa fa-user"><span class="caret"></span></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="profile">
                                            Profile
                                        </a>
                                    </li>
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
            </nav>
            <!--Main Menu End-->
            
        </div>
    </header>
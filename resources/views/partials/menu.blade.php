
       <!-- Main Header -->
    <header class="main-header">
    	<div class="auto-container clearfix">
        	<!--Logo-->
            <div class="logo"><a href="/"><img height="60px" src="/images/logo.jpg" alt="NUL 2018" title="NUL 2018"></a></div>
            
            <!--Main Menu-->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">                                                                                              
                    <ul class="navigation">
                        <li class="{{ Request::path() == '/' ? 'current' : '' }}">
                            <a href="/">Home</a>                           
                        </li>
                        <li  class="{{ Request::path() == 'conference' ? 'current' : '' }}">
                            <a href="conference">The Conference</a>
                        </li>
                        <li  class="{{ Request::path() == 'schedule' ? 'current' : '' }}">
                            <a href="schedule">Schedule</a>
                        </li>
                        <li  class="{{ Request::path() == 'fees' ? 'current' : '' }}">
                            <a href="fees">Fees</a>
                        </li>
                        <li  class="{{ Request::path() == 'accommodation' ? 'current' : '' }}">
                            <a href="accommodation">Accommodation</a>
                        </li>
                        <li  class="{{ Request::path() == 'blog' ? 'current' : '' }}">
                            <a href="blog">Blog</a>
                        </li>
                        
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="navigation">
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                        @else
                        @if (Auth::user()->is_admin)
                            <li><a href="/messages">Messages</a></li>
                            <li><a href="/all-abstracts">Abstracts</a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="fa fa-user"><span class="caret"></span></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/profile">
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
                    </li>
                    </ul>
                </div>
            </nav>
            </header>
            <!--Main Menu End-->
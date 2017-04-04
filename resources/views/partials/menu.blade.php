
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
                        <li  class="{{ Request::path() == 'schedule' ? 'current' : '' }}">
                            <a href="schedule">Schedule</a>
                        </li>
                        <li  class="{{ Request::path() == 'conference' ? 'current' : '' }}">
                            <a href="conference">Conference</a>
                        </li>
                        <li  class="{{ Request::path() == 'accomodation' ? 'current' : '' }}">
                            <a href="accomodation">Accomodation</a>
                        </li>
                        <li  class="{{ Request::path() == 'blog' ? 'current' : '' }}">
                            <a href="blog">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </header>
            <!--Main Menu End-->
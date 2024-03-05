@php
    use Illuminate\Support\Facades\Auth;
@endphp
<header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">   
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>          
            <span class="smllogo smllogo-black"><img src="{{ asset('/front/images/logo.png') }}" width="172" height="40" alt="mobile-logo"></span>
            <span class="smllogo smllogo-white"><img src="{{ asset('/front/images/logo-white.png') }}" width="172" height="40" alt="mobile-logo"></span>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
                <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-black"><img src="{{ asset('/front/images/logo.png') }}" width="172" height="40" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-white"><img src="{{ asset('/front/images/logo-white.png') }}" width="172" height="40" alt="header-logo"></a></div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <li class="nl-simple" data-page="home" aria-haspopup="true"><a href="#" class="scrollTo" href="#home">Home</a></li>
                        <li class="nl-simple" data-page="about" aria-haspopup="true"><a href="#" class="scrollTo" href="#about">About</a></li>
                        <li class="nl-simple" data-page="evaluation" aria-haspopup="true"><a href="#" class="scrollTo" href="#evaluation">Evaluation</a></li>
                        <li class="nl-simple" data-page="why-need" aria-haspopup="true"><a href="#" class="scrollTo" href="#why-need">Why Need</a></li>
                        <li class="nl-simple" data-page="contact" aria-haspopup="true"><a href="#" class="scrollTo" href="#contact">Contact</a></li>

                        <li class="nl-simple" aria-haspopup="true">
                            @if (auth::check())
                                <a href="{{ url(strtolower(auth::user()->role).'/dashboard') }}" class="btn btn-rose tra-black-hover last-link">Dashboard</a>
                            @else
                                <a href="{{ url('/login') }}" class="btn btn-rose tra-black-hover last-link">Login / Create</a>
                            @endif
                        </li>
                    </ul>
                </nav>  <!-- END MAIN MENU -->

            </div>
        </div>  <!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>
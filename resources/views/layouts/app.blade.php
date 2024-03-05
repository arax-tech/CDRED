
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Sukh">  
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        <!-- SITE TITLE -->
        <title>@yield('title')</title>
                            
        <!-- FAVICON AND TOUCH ICONS  -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">


        <!-- BOOTSTRAP CSS -->
        <link href="{{ asset('/front/assets/css/bootstrap.min.css') }}" rel="stylesheet">       
                
        <!-- FONT ICONS -->
        <link href="{{ asset('/front/assets/css/flaticon.css') }}" rel="stylesheet">

        <!-- PLUGINS STYLESHEET -->
        <link href="{{ asset('/front/assets/css/menu.css') }}" rel="stylesheet">    
        <link id="effect" href="{{ asset('front/assets/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
        <link href="{{ asset('/front/assets/css/magnific-popup.css') }}" rel="stylesheet">  
        <link href="{{ asset('/front/assets/css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('/front/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/front/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

        <!-- ON SCROLL ANIMATION -->
        <link href="{{ asset('/front/assets/css/animate.css') }}" rel="stylesheet">
    
        <!-- TEMPLATE CSS -->
        <link href="{{ asset('/front/assets/css/style.css') }}" rel="stylesheet">

        <!-- RESPONSIVE CSS -->
        <link href="{{ asset('/front/assets/css/responsive.css') }}" rel="stylesheet"> 
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

        <style type="text/css">
            .active > a{color: #ff1f59 !important}
            .indicators{
                display:none;
            }
        </style>
    </head>




    <body>




        <!-- PRELOADER SPINNER
        ============================================= -->       
        <div id="loader-wrapper">
            <div id="loading">
                <div id="loading-center">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
        </div>




        <!-- PAGE CONTENT -->   
            <div id="page" class="page">
                <!-- HEADER  -->
                    @include('layouts.include.header')
                <!-- END HEADER -->

                @yield('content')

                <!-- FOOTER-2  -->
                    @include('layouts.include.footer')
                <!-- END FOOTER-2 -->
            </div>  
        <!-- END PAGE CONTENT -->


        


       

        <!-- EXTERNAL SCRIPTS
        ============================================= -->   
        <script src="{{ asset('/front/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('/front/assets/js/modernizr.custom.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.easing.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('/front/assets/js/menu.js') }}"></script>
        <script src="{{ asset('/front/assets/js/materialize.js') }}"></script>   
        <script src="{{ asset('/front/assets/js/jquery.scrollto.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('/front/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.magnific-popup.min.js') }}"></script> 
        <script src="{{ asset('/front/assets/js/register-form.js') }}"></script> 
        <script src="{{ asset('/front/assets/js/comment-form.js') }}"></script>  
        <script src="{{ asset('/front/assets/js/jquery.validate.min.js') }}"></script>   
        <script src="{{ asset('/front/assets/js/jquery.ajaxchimp.min.js') }}"></script>  

        <!-- Custom Script -->      
        <script src="{{ asset('/front/assets/js/custom.js') }}"></script>

        <script type="text/javascript">
            $('.wsmenu-list li').on('click', function() {
                var elem   = $('#' + $(this).data('page')),
                scroll = elem.offset().top;
                $('body, html').animate({scrollTop : scroll}, 1000);
                $(this).addClass('active').siblings('.active').removeClass('active');
            });


            $(window).on('scroll', function(e) {
                var elems    = $('#home, #about, #evaluation, #why-need, #contact'),scrolled = $(this).scrollTop();
                var dataPage = elems.filter(function() {
                    return $(this).offset().top + ($(this).height() / 2) >= scrolled;
                }).first();

                $('.wsmenu-list li[data-page="'+dataPage.prop('id')+'"]').addClass('active').siblings('.active').removeClass('active');
                }).trigger('scroll');
        </script> 
    </body>
</html> 
<footer id="footer-2" class="footer bg-whitesmoke division">
    <div class="container">


        <!-- FOOTER CONTENT -->
        <div class="row">


            <!-- FOOTER INFO -->
            <div class="col-md-5 col-lg-5 col-xl-4">
                <div class="footer-info mb-40">

                    <!-- Footer Logo -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
                    <img src="{{ asset('/front/images/logo.png') }}" width="172" height="40" alt="footer-logo">

                    <!-- Text -->   
                    <p>CDRED - an organization committed to promoting skills assessment and development across borders!
                    </p>
                
                </div>  
            </div>  


            <!-- FOOTER PRODUCTS LINKS -->
            <div class="col-md-3 col-lg-3 col-xl-2">
                <div class="footer-links mb-40">
                
                    <!-- Title -->
                    <h5 class="h5-md">Quick Links</h5>

                    <!-- Footer Links -->
                    <ul class="foo-links clearfix">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <!--<li><a href="#">Refund Policy</a></li>-->
                        <li><a href="{{ url('/term-and-condition') }}">Terms & Condition</a></li>                             
                    </ul>

                </div>
            </div>


            <!-- FOOTER COMPANY LINKS -->
            <div class="col-md-4 col-lg-4 col-xl-3">
                <div class="footer-links mb-40">
                
                    <!-- Title -->
                    <h5 class="h5-md">Popular Categories</h5>

                    <!-- Footer Links -->
                    <ul class="clearfix">
                        <li><a href="{{ url('/login') }}">User Login</a></li>
                        <li><a href="{{ url('/register') }}">Create Account</a></li>
                        <li><a href="#evaluation">Skill Evaluations</a></li>              
                    </ul>

                </div>
            </div>


            <!-- FOOTER NEWSLETTER FORM -->
            <div class="col-md-7 col-xl-3">
                <div class="footer-form mb-20">

                    <!-- Title -->
                    <h5 class="h5-md">Stay in Touch</h5>

                    <!-- Newsletter Form Input -->
                    <form class="newsletter-form">
                                
                        <div class="input-group">
                            <input type="email" autocomplete="off" class="form-control" placeholder="Your Email Address" required="" id="s-email">                              
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-rose black-hover">Subscribe</button> 
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->       
                        <label for="s-email" class="form-notification"></label>
                                    
                    </form>
                                            
                </div>
            </div>  <!-- END FOOTER NEWSLETTER FORM -->


        </div>    <!-- END FOOTER CONTENT -->


        <!-- BOTTOM FOOTER -->
        <div class="bottom-footer">
            <div class="row">


                <!-- FOOTER COPYRIGHT -->
                <div class="col-lg-12">
                    <ul class="bottom-footer-list text-center">
                        <li><p>&copy; Copyright 2015-2023 CDRED </p></li>
                        <li><p class="last-li"><a href="mailto:support@cdred.org">support@cdred.org</a></p></li>
                    </ul>
                </div>


                <!-- FOOTER SOCIALS LINKS -->
                <!--<div class="col-lg-4 text-right">
                    <ul class="foo-socials text-center clearfix">

                        <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li> 
                        <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>           
                        
                    

                    </ul>
                </div>-->


            </div>
        </div>  <!-- END BOTTOM FOOTER -->


    </div>     <!-- End container -->                                       
</footer>
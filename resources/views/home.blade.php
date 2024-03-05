@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <!-- HERO-1
    ============================================= -->   
    <section id="home" class="hero-section division">

        
        <!-- SLIDER -->
        <div class="slider">
            <ul class="slides">


                <!-- SLIDE #1 -->
                <li id="slide-1">

                    <!-- Background Image -->
                    <img src="{{ asset('/front/images/slider/slide-1.jpg') }}" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center left-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-7">
                                    <div class="caption-txt">

                                        <!-- Title -->
                                        <h2 class="h2-sm">Do you need a Skill Evaluation ?</h2>
                                        
                                        <!-- Text -->
                                        <p class="p-lg">Abroad Jobs | Career Opportunity | Improve Skills | Immigration 
                                        </p>

                                        <!-- Button -->
                                        <a href="#evaluation" class="btn btn-md btn-rose tra-black-hover">Start Now</a>

                                    </div>
                                </div>
                            </div>  <!-- End row -->
                        </div>  <!-- End container -->
                    </div>  <!-- End Image Caption -->

                </li>   <!-- END SLIDE #1 -->


            </ul>
        </div>  <!-- END SLIDER -->

        
    </section>  <!-- END HERO-1 --> 




    <!-- ABOUT-1
    ============================================= -->
    <section id="about-1" class="bg-05 about-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- ABOUT BOX #1 -->       
                <div class="col-md-4">
                    <div class="abox-1 icon-xs">

                        <!-- Icon --> 
                        <span class="flaticon-004-computer"></span>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-md">Trusted in 102+ Countries</h5>
                            <p class="p-md">Gateway to opportunities</p>
                        </div>

                    </div>
                </div>  <!-- END ABOUT BOX #1 -->   


                <!-- ABOUT BOX #2 -->       
                <div class="col-md-4">
                    <div class="abox-1 icon-xs">

                        <!-- Icon --> 
                        <span class="flaticon-028-learning-1"></span>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-md">Trusted partnership </h5>
                            <p class="p-md">5000+ Companies and 8500+ Experts globally</p>
                        </div>

                    </div>
                </div>  <!-- END ABOUT BOX #2 -->   


                <!-- ABOUT BOX #3 -->       
                <div class="col-md-4">
                    <div class="abox-1 icon-xs">

                        <!-- Icon --> 
                        <span class="flaticon-032-tablet"></span>

                        <!-- Text -->
                        <div class="abox-1-txt">
                            <h5 class="h5-md">Ranked No. 1 Skill Evaluation </h5>
                            <p class="p-md"> in North America and Europe</p>
                        </div>

                    </div>
                </div>  <!-- END ABOUT BOX #3 -->   


            </div>    <!-- End row -->  
        </div>     <!-- End container -->   
    </section>  <!-- End ABOUT-1 --> 




    <!-- ABOUT-2
    ============================================= -->
    <section id="about" class="wide-60 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- ABOUT IMAGE -->
                <div class="col-md-5 col-lg-6">
                    <div class="img-block pc-25 mb-40">
                        <img class="img-fluid" src="{{ asset('/front/images/about.jpg') }}" alt="about-image">
                    </div>
                </div>


                <!-- ABOUT TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="txt-block mb-40">

                        <!-- Title -->  
                        <h3 class="h3-sm">About Us</h3>

                        <!-- Text -->
                        <p class="text-justify">Welcome to the Council for Deductive Research and Education Development (CDRED) - an organization committed to promoting 
                        skills assessment and development across borders! Since our establishment in 2015, CDRED has been dedicated to validating and
                        assessing skills to ensure that individuals and organizations can achieve their full potential. Our team comprises experts in various 
                        fields, including education, psychology, and technology, who are passionate about helping people develop and succeed in their
                        chosen fields at CDRED, we believe that skills assessment is essential for personal and professional growth. With the increasing
                        pace of technological advancements and the changing demands of the job market, it's more crucial than ever to have a clear 
                        understanding of your skills and abilities. Our assessments are designed to help individuals and organizations identify their
                        strengths and areas for improvement and create a roadmap for continuous development .Our assessments are created using 
                        rigorous standards and methodologies to ensure their accuracy and reliability. We work with leading organizations, businesses, and 
                        educational institutions to develop assessments that are relevant and effective in today's fast-paced world. Our assessments cover 
                        a wide range of skills and areas of expertise, including technical, behavioral, and language skills. Join us in our mission to promote skills assessment and 
                        development worldwide, and let's create a brighter future together!
                        </p> 

                        <!-- List -->   
                        

                    </div>
                </div>    <!-- END ABOUT TEXT -->


            </div>    <!-- End row -->  
        </div>     <!-- End container -->   
    </section>  <!-- End ABOUT-2 --> 










    <!-- SERVICES-6
    ============================================= -->
    <section id="evaluation" class="bg-03 wide-60 services-section division">
        <div class="container white-color">


            <!-- SERVICES TEXT -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="services-6-txt">

                        <!-- Title -->
                        <h3 class="h3-md">Get desired job career with CDRED Skill Evaluation</h3>   
        
                        <!-- Text -->
                        <p class="p-md">Getting CDRED Skill Evaluation you can check your skill level and get suggestions to  improve your skill and future plans . CDRE boost your skill value for applying job  and start your professional career
                        </p>

                        

                    </div>
                </div>
            </div>  <!-- END SERVICES TEXT -->


            <!-- SERVICE BOXES -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                        <!-- SERVICE BOX #1 -->     
                        <div class="sbox-6 icon-xl">
                            <h4>Step-1</h4>
                            <span class="flaticon-031-select"></span>
                            <h5 class="h5-xs">Submit your application online and get your online CDRED reference no</h5>    
                        </div>
                        <!-- SERVICE BOX #3 -->     
                        

                        <!-- SERVICE BOX #5 --> 
                        <div class="sbox-6 icon-xl">
                            <h4>Step-2</h4>
                            <span class="flaticon-001-book"></span>
                            <h5 class="h5-xs">Upload all mandatory documents  & Track live status of your application </h5> 
                        </div>

                        <div class="sbox-6 icon-xl">
                            <h4>Step-3</h4>
                            <span class="flaticon-006-diploma"></span>
                            <h5 class="h5-xs">Get your Electronic Report link to download and start your new career </h5>   
                        </div>

                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <!-- Button -->
                        <a href="#" class="btn btn-md btn-rose tra-white-hover">Start Learning Now!</a>
                </div>
            </div>  <!-- END SERVICE BOXES -->


        </div>     <!-- End container -->   
    </section>  <!-- End SERVICES-6 --> 









    <!-- ABOUT-3
    ============================================= -->
    <section id="why-need" class="pt-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- ABOUT TEXT -->
                <div class="col-md-7 col-lg-6">
                    <div class="txt-block pc-25">

                        <!-- Title -->  
                        <h3 class="h3-sm">Why Need CDRED Skill Evaluation</h3>

                        <!-- Text -->
                        <p>Whether you are a student, job seeker, or working professional, our assessments can help you identify your strengths and weaknesses, explore new career paths, and make informed decisions about your future. 

                        </p>

                        <!-- List -->   
                        <ul class="txt-list mb-15">

                            <li>Gain a clear understanding of your skills and abilities</li>
                                            
                            <li>Identify areas where you need to improve
                            </li>

                            <li>Discover new career opportunities that match your strengths</li>
                            <li>Enhance your resume and increase your chances of getting hired</li>
                            <li>Boost your confidence and motivation to achieve your goals</li>
                            <li>Get desire job in dream company </li>

                        </ul>

                        <!-- Button -->
                        <a href="#" class="btn btn-md btn-rose tra-black-hover">Start Learning Now</a>

                    </div>
                </div>    <!-- END ABOUT TEXT -->


                <!-- ABOUT IMAGE -->
                <div class="col-md-5 col-lg-6">
                    <div class="img-block">
                        <img class="img-fluid" src="{{ asset('/front/images/why-need.jpg') }}" alt="about-image">
                    </div>
                </div>


            </div>    <!-- End row -->  
        </div>     <!-- End container -->   
    </section>  <!-- End ABOUT-3 --> 


    <!-- BANNER-5
    ============================================= -->
    <section id="banner-5" class="bg-whitesmoke wide-60 banner-section division">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="h3-sm text-center mb-4">Choose CDRED</h3>
                </div>

                <!-- BANNER TEXT -->
                <div class="col-md-6">
                    <div class="banner-5-txt" style="min-height: 300px;">

                        <!-- Icon --> 
                        <img src="{{ asset('/front/images/image-04.png') }}" alt="banner-icon">

                        <!-- Text --> 
                        <div class="b5-txt">

                            <!-- Title -->  
                            <h4 class="h4-xs">Become a Certified Evaluator </h4>

                            <!-- Text -->
                            <p>Become a certified Evaluator and Gain more with CDRED. 
                            </p>

                            <!-- Button --> 
                            <a href="#" class="btn btn-rose tra-black-hover">Know More</a>

                        </div>

                    </div>
                </div>  <!-- END BANNER TEXT -->


                <!-- BANNER TEXT -->
                <div class="col-md-6">
                    <div class="banner-5-txt" style="min-height: 300px;">

                        <!-- Icon --> 
                        <img src="{{ asset('/front/images/image-05.png') }}" alt="banner-icon">

                        <!-- Text --> 
                        <div class="b5-txt">

                            <!-- Title -->  
                            <h4 class="h4-xs">Become a Partner - Companies  </h4>

                            <!-- Text -->
                            <p>Get  skill evaluation for your employees and hire skilled certified candidates from CDRED platform   

                            </p>

                            <!-- Button --> 
                            <a href="#" class="btn btn-rose tra-black-hover">Know More</a>

                        </div>

                    </div>
                </div>  <!-- END BANNER TEXT -->


            </div>   <!-- End row -->
        </div>     <!-- End container -->
    </section>  <!-- END BANNER-5 -->



    <!-- BANNER-3
    ============================================= -->
    <section id="contact" class="wide-100 contacts-section division">
            <div class="container">


                <!-- SECTION TITLE -->  
                <div class="row">   
                    <div class="col-md-12">
                        <div class="section-title title-centered mb-60">

                            <!-- Title  --> 
                            <h3 class="h3-sm">Need Help? Get in Touch</h3>  

                            <!-- Text -->   
                            <p class="p-md">Get in Touch with Us - Let's Discuss Your Skills and Evaluations
                            </p>

                        </div>
                    </div>
                </div>


                <div class="contacts-2-holder">
                    <div class="row d-flex align-items-center">


                        <!-- CONTACT BOX #1 -->
                        <div class="col-lg-4">
                            <div class="contact-box b-right">

                                <!-- Icon --> 
                                <img class="img-75" src="{{ asset('/front/images/icons/pin.png') }}" alt="contacts-icon">

                                <!-- Title -->  
                                <h5 class="h5-md">Our Location</h5>

                                <!-- Text -->   
                                <p>33/234 Market Street Harrisburg, PA 17126 USA</p>  

                                <!-- Button --> 
                                <a href="mailto:support@cdred.org" class="btn btn-tra-grey rose-hover">support@cdred.org</a>
                                
                            </div>          
                        </div>  


                        <!-- CONTACT BOX #2 -->
                        <div class="col-lg-4">
                            <div class="contact-box b-right">

                                <!-- Icon --> 
                                <img class="img-75" src="{{ asset('/front/images/icons/world-map') }}.png" alt="contacts-icon">
                                
                                <!-- Title -->  
                                <h5 class="h5-md">Partnership Request</h5>

                                <!-- Text -->   
                                <p>For partnership and business development inquiries</p>   

                                <!-- Button --> 
                                <a href="mailto:support@cdred.org" class="btn btn-tra-grey rose-hover">support@cdred.org</a>

                            </div>          
                        </div>  


                        <!-- CONTACT BOX #3 -->
                        <div class="col-lg-4">
                            <div class="contact-box">

                                <!-- Icon --> 
                                <img class="img-75" src="{{ asset('/front/images/icons/request.png') }}" alt="contacts-icon">

                                <!-- Title -->  
                                <h5 class="h5-md">Need Help?</h5>

                                <!-- Text -->   
                                <p>Have questions about teaching and career opportunities?</p>  

                                <!-- Button --> 
                                <a href="mailto:support@cdred.org" class="btn btn-tra-grey rose-hover">support@cdred.org</a>
                                
                            </div>          
                        </div>  


                    </div>    <!-- End row -->
                </div>    <!-- End contacts-holder -->
            </div>     <!-- End container -->   
    </section>

    <section class="wide-100 contacts-section division container" id="faq-tabs">
        <!-- vertical tab pill -->
        

        <div class="row">   
            <div class="col-md-12">
                <div class="section-title title-centered mb-60">

                    <!-- Title  --> 
                    <h3 class="h3-sm">FAQ ?</h3>  

                    <!-- Text -->   
                    <p class="p-md">Frequently asked questions</p>

                </div>
            </div>
        </div>
        <div class="collapse-margin collapse-icon mt-2" id="faq-payment-qna">
            <div class="card">
                <div class="card-header" id="paymentTwo" data-toggle="collapse" role="button" data-target="#faq-payment-two" aria-expanded="true" aria-controls="faq-payment-two">
                    <span class="lead collapse-title">Why choose CDRED for skill Evaluation?</span>
                </div>
                <div id="faq-payment-two" class="collapse show" aria-labelledby="paymentTwo" data-parent="#faq-payment-qna">
                    <div class="card-body">CDRED have quality control mechanisms in place to ensure the assessments are reliable, valid, and accurate as well as specialize in assessing specific skills and competencies across various industries.This is the fastest way to complete evaluation in less time.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                    <span class="lead collapse-title">What is the application fee for Skill Evaluation?</span>
                </div>

                <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#faq-payment-qna">
                    <div class="card-body">
                        Application fee for skill evaluation is $185 USD 
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="paymentThree" data-toggle="collapse" role="button" data-target="#faq-payment-three" aria-expanded="false" aria-controls="faq-payment-three">
                    <span class="lead collapse-title">Can I get refund after pay my application fee?</span>
                </div>
                <div id="faq-payment-three" class="collapse" aria-labelledby="paymentThree" data-parent="#faq-payment-qna">
                    <div class="card-body">
                       Application fee is non-refundable once application submitted and fee paid.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="paymentFour" data-toggle="collapse" role="button" data-target="#faq-payment-four" aria-expanded="false" aria-controls="faq-payment-four">
                    <span class="lead collapse-title">How long it takes time to complete skill evaluation report?</span>
                </div>
                <div id="faq-payment-four" class="collapse" aria-labelledby="paymentFour" data-parent="#faq-payment-qna">
                    <div class="card-body">
                        The average processing time is 25-35 working days ,sometime it may increase if your employer or organisation delay verification response. 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="paymentFive" data-toggle="collapse" role="button" data-target="#faq-payment-five" aria-expanded="false" aria-controls="faq-payment-five">
                    <span class="lead collapse-title">
                        What Should I do if my emloyer not verify my data?
                    </span>
                </div>
                <div id="faq-payment-five" class="collapse" aria-labelledby="paymentFive" data-parent="#faq-payment-qna">
                    <div class="card-body">
                       if your employer is not verifing your data , you need to contact our support team and raise a self document verification ticket.
                       kindly note that you should have sufficient documents to prove that you worked with that employer.we may ask for additional documents. 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="paymentSix" data-toggle="collapse" role="button" data-target="#faq-payment-six" aria-expanded="false" aria-controls="faq-payment-six">
                    <span class="lead collapse-title">What is the validity of Skill Evaluation report?</span>
                </div>
                <div id="faq-payment-six" class="collapse" aria-labelledby="paymentSix" data-parent="#faq-payment-qna">
                    <div class="card-body">
                       Skill Evaluation report is valid for 3 years from the date of issue. 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="paymentSeven" data-toggle="collapse" role="button" data-target="#faq-payment-seven" aria-expanded="false" aria-controls="faq-payment-seven">
                    <span class="lead collapse-title">
                        When Should i contact to CDRED Support?
                    </span>
                </div>
                <div id="faq-payment-seven" class="collapse" aria-labelledby="paymentSeven" data-parent="#faq-payment-qna">
                    <div class="card-body">
                     If you found that you have enterd any wrong information in your application form.
                     If your employer not verifing your data in 20 days. 
                     (you can check in your application dashboard if your verification status is still showing pending)
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('user.layouts.app')
@section('title', 'Help Center')

@section('css')

@endsection
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- search header -->
            <section id="faq-search-filter">
                <div class="card faq-search" style="background-image: url('{{ asset('/backend/app-assets/images/banner/banner.png') }}')">
                    <div class="card-body text-center p-5">
                        <!-- main title -->
                        <h2 class="text-primary">Let's answer some questions</h2>

                        <!-- subtitle -->
                        <p class="card-text mb-2">or choose a category to quickly find the help you need</p>

                        
                    </div>
                </div>
            </section>
            <!-- /search header -->

                <!-- frequently asked questions tabs pills -->
                <section id="faq-tabs">
                    <!-- vertical tab pill -->
                   
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
                </section>
                <!-- / frequently asked questions tabs pills -->

            <!-- contact us -->
            <section class="faq-contact">
                <div class="row mt-5 pt-75">
                    <div class="col-12 text-center">
                        <h2>You still have a question?</h2>
                        <p class="mb-3">
                            If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-center faq-contact-card shadow-none py-1">
                            <div class="card-body">
                                <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                                    <i data-feather="phone-call" class="font-medium-3"></i>
                                </div>
                                <h4>+1 (717) 409 5353</h4>
                                <span class="text-body">We are always happy to help!</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-center faq-contact-card shadow-none py-1">
                            <div class="card-body">
                                <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                                    <i data-feather="mail" class="font-medium-3"></i>
                                </div>
                                <h4>support@cdred.org</h4>
                                <span class="text-body">Best way to get answer faster!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ contact us -->

        </div>
    </div>
</div>
@endsection


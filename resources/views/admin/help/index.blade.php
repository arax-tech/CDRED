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
                                <span class="lead collapse-title">Can I store the item on an intranet so everyone has access?</span>
                            </div>
                            <div id="faq-payment-two" class="collapse show" aria-labelledby="paymentTwo" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                                    liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread jelly-o
                                    gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie carrot cake.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentOne" data-toggle="collapse" role="button" data-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                                <span class="lead collapse-title">Does my subscription automatically renew?</span>
                            </div>

                            <div id="faq-payment-one" class="collapse" aria-labelledby="paymentOne" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                    bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                    caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                                    marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="paymentThree" data-toggle="collapse" role="button" data-target="#faq-payment-three" aria-expanded="false" aria-controls="faq-payment-three">
                                <span class="lead collapse-title">What does non-exclusive mean?</span>
                            </div>
                            <div id="faq-payment-three" class="collapse" aria-labelledby="paymentThree" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                                    soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet
                                    muffin chocolate candy pie tootsie roll marzipan.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentFour" data-toggle="collapse" role="button" data-target="#faq-payment-four" aria-expanded="false" aria-controls="faq-payment-four">
                                <span class="lead collapse-title">Is the Regular License the same thing as an editorial license?</span>
                            </div>
                            <div id="faq-payment-four" class="collapse" aria-labelledby="paymentFour" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                                    croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                                    jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie
                                    wafer tootsie roll. Tootsie roll sweet cupcake.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentFive" data-toggle="collapse" role="button" data-target="#faq-payment-five" aria-expanded="false" aria-controls="faq-payment-five">
                                <span class="lead collapse-title">
                                    Which license do I need for an end product that is only accessible to paying users?
                                </span>
                            </div>
                            <div id="faq-payment-five" class="collapse" aria-labelledby="paymentFive" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentSix" data-toggle="collapse" role="button" data-target="#faq-payment-six" aria-expanded="false" aria-controls="faq-payment-six">
                                <span class="lead collapse-title">Which license do I need to use an item in a commercial?</span>
                            </div>
                            <div id="faq-payment-six" class="collapse" aria-labelledby="paymentSix" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    At tempor commodo ullamcorper a lacus vestibulum. Ultrices neque ornare aenean euismod. Dui vivamus
                                    arcu felis bibendum. Turpis in eu mi bibendum neque egestas congue. Nullam ac tortor vitae purus
                                    faucibus ornare suspendisse sed.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentSeven" data-toggle="collapse" role="button" data-target="#faq-payment-seven" aria-expanded="false" aria-controls="faq-payment-seven">
                                <span class="lead collapse-title">
                                    Can I re-distribute an item? What about under an Extended License?
                                </span>
                            </div>
                            <div id="faq-payment-seven" class="collapse" aria-labelledby="paymentSeven" data-parent="#faq-payment-qna">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Euismod lacinia at quis risus sed vulputate odio ut enim. Dictum at tempor
                                    commodo ullamcorper a lacus vestibulum.
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
                                <h4>+ (810) 2548 2568</h4>
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
                                <h4>hello@help.com</h4>
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

  @php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', 'About Us')


@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Why Choose us</h1>
                    </div>

                </div>
            </div>
        </section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0">
                    <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-01-68x68.jpg" alt=""
                                     class=""/>
                                
                                <h2 class="font-weight-normal text-5">Trader Performance</h2>
                                <p class="mb-0">High efficiency of traders, which was the result of the comprehensive
                                    and rigorous training of each member of our team.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0">
                    <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-02-68x68.png" alt=""/>

                                <h2 class="font-weight-normal text-5">Instant Withdrawal</h2>
                                <p class="mb-0">Withdrawal requests are immediately entered in the automatic processing
                                    queue. Waiting is kept to a minimum
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0">
                    <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-02-68x68.png" alt=""/>

                                <h2 class="font-weight-normal text-5">Data Security</h2>
                                <p class="mb-0">Our platform provides a high level of security for its customers. The
                                    company's servers are resistant to any DDoS attacks, as well as all traffic from
                                    clients to go through reliable SSL encryption.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-4 col-lg-4 mb-4 mb-lg-0">
                    <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-05-68x68.png" alt=""/>

                                <h2 class="font-weight-normal text-5">24/7 Support</h2>
                                <p class="mb-0">The best specialized professionals from Berk Forts  will come to your
                                    aid in case business circumstances require it. Each Client of the Company can count
                                    on a personal approach in resolving all possible issues related to cooperation with
                                    us.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0">
                    <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-06-68x68.png" alt=""/>

                                <h2 class="font-weight-normal text-5">Trading Efficiency</h2>
                                <p class="mb-0">The high level of training of traders and the use of innovative methods
                                    of analytics and monitoring indicative exchange fluctuations allows for maximizing
                                    profits.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0">

                <div
                        class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                        <div class="featured-box">
                            <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                <img src="front/img/mitech-landing-theme-feature-06-68x68.png" alt=""/>

                                <h2 class="font-weight-normal text-5">Future Growth</h2>
                                <p class="mb-0">Berk Forts  is a company with a clear roadmap and expansion plans for
                                    the future that will only enhance our customers’ experience.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
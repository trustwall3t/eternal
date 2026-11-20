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
                        <h1 data-title-border>Real Estate Investing</h1>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="750">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-12 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="1000">
                    <div class="owl-carousel owl-theme nav-inside mb-0"
                         data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                        <div>
                            <img alt="" class="img-fluid" style="border-radius: 5px"
                                 src="front/img/real-estate.jpg">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <div class="container pb-1">

        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                            <span class="word-rotator-words bg-primary">
										<b class="is-visible">TRADING</b>
										<b>BUY</b>
										<b>INVEST</b>
									</span>
                        <span>BUILD WEALTH THROUGH REAL ESTATE</span>

                    </h2>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-10">
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                       data-appear-animation-delay="250">Berk Forts  is building the world's leading real estate
                        investment marketplace. Our mission is to make ownership of investment real estate radically
                        accessible, cost-effective and simple.</p><p>

                        Our platform lets everyone from first-time investors to global asset managers evaluate, purchase
                        and own residential investment properties with confidence from anywhere in the world. Since
                        launch, we've surpassed $4 billion in transactions and continue to disrupt the industry with
                        cutting edge technology and innovations.</p><p>

                        No matter your investing goals, Berk Forts  is here to help.</p><p>

                        Clunky, opaque, inefficient… the process of buying and selling investment properties was badly
                        in need of a rethink. Frustrated, Gregor Watson, founder of multiple financial and investment
                        firms and a long-time investor in the real estate space, reached out to Gary Beasley to
                        brainstorm. Gary had invaluable perspectives on technology and deep industry experience at
                        various successful real estate, hospitality and tech companies and leading two companies through
                        IPOs. They soon invited Rich Ford to the conversation. Rich had more than 20 years of M&A and MX
                        raising experience, and was a pioneer in the single-family rental investing space.
                    </p><p>

                        With their combined experience along with Silicon Valley's top tech talent and investors, they
                        built a vibrant marketplace where investing in real estate is as easy as investing in stocks.


                    </p>

                </div>
            </div>

            <div class="col-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                <a href="login" class="btn btn-modern btn-primary mt-1">Start Trading</a>
            </div>
        </div>

    </div>

    <div class=" pb-1">
        <div class="">
            <div class="col-md-12">
               <style>

    .responsive-iframe033 {

        top: 0;
        left: 0;
        bottom: 0;
        right: 0;

        border: none;
        overflow: hidden;
    }
    @media  only screen and (max-width: 500px) {
        .responsive-iframe033 {
            width:100%; height:1200px;
        }
    }

    @media  only screen and (max-width: 600px) {
        .responsive-iframe033 {
            width:100%; height:1100px;
        }
    }

    @media  only screen and (min-width: 600px) {
        .responsive-iframe033 {
            width:100%; height:1000px;
        }
    }



</style>


            </div>
        </div>
    </div>
@endsection
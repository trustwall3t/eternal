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
                        <h1 data-title-border>NON FUNGIBLE TOKENS </h1>
                    </div>

                </div>
            </div>
        </section>
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
                                     src="front/img/nftt.png">
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
                            <span>INVEST IN NFT DIGITAL COLLECTIBLES</span>

                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                           data-appear-animation-delay="250">Our index shows that NFTs on the fractional markets have
                            given back all their returns since secondary trading opened in September 2021.
                            Fractional assets dipped to a zero percent return last week, there’s been a slight bounce
                            with a 50-100% return for all IPOs across Otis and Rally.
                        </p>
                        <p>We operate NFT marketplace digital platforms for buying and selling NFTs. These platforms
                            allow people to store and display their NFTs plus sell them to others for cryptocurrency or
                            money. Some NFT marketplaces also allow users to mint their NFTs on the platform itself.
                        </p><p>
                            In exchange for a fee, our NFT marketplace will typically handle the transfer of an NFT from
                            one party to the other.
                        </p><p>

                            The types of NFTs available, fees, payment options, permitted blockchains and other rules
                            will depend on which investment plan you use.
                        </p><p>

                            Given that Berk Fort spends so much time reviewing work before it’s available for sale,
                            investors can feel more confident in the quality. For their services, SuperRate charges 15%
                            the first time an NFT is sold on the primary market. There is also a flat 3% of every
                            transaction, which the buyer pays.

                        </p>
                    </div>
                </div>

                <div class="col-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                    <a href="login" class="btn btn-modern btn-primary mt-1">Start Trading</a>
                </div>
            </div>

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
                                <img alt="" class="img-fluid"
                                     src="front/img/nft1.png">
                                <img alt="" class="img-fluid"
                                     src="front/img/nft2.png">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>

    </div>
    <style>

        .ffff1 {

            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width:100%;
            border: none;
            overflow: hidden;
        }
    </style>

@endsection
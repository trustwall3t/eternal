    @php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')



@section('content')
     <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Crude Oil - INVEST IN CRUDE OIL</h1>
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
										<b>MINING</b>
										<b>INVEST</b>
									</span>
                            <span>INVEST IN CRUDE OIL</span>

                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                           data-appear-animation-delay="250">Day trading ‘Crude oil’ is about speculating on short-term
                            price movements, rather than attempting to assess the "real" value of crude. By using a
                            combination of long and short positions, our traders turn a profit whether the price of
                            crude is rising or falling.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                    <a href="login" class="btn btn-modern btn-primary mt-1">Start Trading</a>
                </div>
            </div>
        </div>
        <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn"
                 data-appear-animation-delay="750">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                         data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0"
                             data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <img alt="" class="img-fluid" style="border-radius: 5px"
                                     src="front/img/crypto2.png">
                            </div>
                            <div>
                                <img alt="" style="border-radius: 5px" class="img-fluid"
                                     src="front/img/crypto2.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1200">Crude Oil <strong
                                    class="font-weight-extra-bold">trading usually occurs on-spot,</strong></h2>
                        </div>
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="1400"> commodity
                            markets are non-expiring and are not subject to an expiry date or rollover charges. These
                            markets are priced based on the Futures contract and offer the opportunity to trade these
                            markets long-term without the need to roll.
                        </p>
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="1400">
                            The position on expiration of the current Futures contract. Continuous charting is available
                            on these markets which allows us to apply deeper levels of technical analysis to this
                            commodity trading compared with traditional commodity market charting. With our
                            sophisticated network of sub-brokers, we trade both on ICE and NYMEX.


                        </p>
                    </div>
                </div>

            </div>

        </section>

        <div class="container">

            <div class="row mt-5 py-3">
                <div class="col-md-12">


                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_8d5fb"></div>
                        <div class="tradingview-widget-copyright"><a href="login.html" rel="noopener" target="_blank"><span class="blue-text">OIL Charts </span></a> by Berk Forts   </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "US OIL",
                                            "TVC:USOIL|ALL"
                                        ],
                                        [
                                            "UK OIL",
                                            "TVC:UKOIL|ALL"
                                        ]
                                    ],
                                    "chartOnly": false,
                                    "width": "100%",
                                    "height": "500",
                                    "locale": "en",
                                    "colorTheme": "light",
                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                    "trendLineColor": "#2962FF",
                                    "fontColor": "#787B86",
                                    "underLineColor": "rgba(41, 98, 255, 0.3)",
                                    "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                    "autosize": true,
                                    "container_id": "tradingview_8d5fb"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>

            </div>

        </div>
    </div>
    <section class="section section-no-border pb-0 mt-3 mb-0">
    <div class="container pt-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4">
                <h2 class="text-7 font-weight-semibold line-height-2 mb-2">Assess your business potentials and find
                    opportunities
                    for bigger success
                </h2>
                <p>we utilize a variety of strategies and techniques to decide the best entry/exit point and timing to
                    buy and sell Cryptocurrencies</p>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-1"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Super High<br>Performance</h4>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-2"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Fully secured<br> 100% Encryption
                </h4>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-3"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Extremely Easy<br>to Customize</h4>
            </div>
            <div class="col-sm-12">
                <hr class="my-5">
                <h2 class="font-weight-bold text-center text-10 pt-3 mb-4">Join our website and register free
                    account.</h2>
            </div>
            <div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
                <p class="text-4"> We offer the best referral reward system
                    for all users with or without an active deposit.

                </p>
            </div>
        </div>
        <div class="text-center">
            <a href="login.html"
               class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation animated fadeIn appear-animation-visible"
               data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank"
               style="animation-delay: 300ms;">Get Started</a>
        </div>
        <div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter"
             data-appear-animation-delay="500" data-appear-animation-duration="750"
             style="height: 0; padding-bottom: 16%;">
            
            
        </div>

    </div>


</section>
<section class="section bg-dark section-dark border-0 m-0">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-0 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"
                data-appear-animation-duration="750">ADVANTAGE</h5>
            <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="600" data-appear-animation-duration="750">WHY WE TRADE CRYPTO</h2>
            
            
            
            
        </div>
        <div class="row pb-5">
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-1 mt-4"></i>
                    <h4 class="text-4 mb-2">Crypto Volatility</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">Crypto market has rapid intraday price
                        movements which can provide a range of opportunities for us to go long and short quickly</p>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="400" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-2 mt-4"></i>
                    <h4 class="text-4 mb-2">Liquidity</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">With the existence of centralized,
                        decentralized and p2p trade options in Crypto, the liquidity of these Assets is highly enhanced
                    </p>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="600" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-3 mt-4"></i>
                    <h4 class="text-4 mb-2">Shorting the Markets</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">Using Crypto CFDs we can profit from
                        falling markets, as we are speculating only on price, you are not affected from falls but you
                        can make profits too.</p>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="800" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-17 mt-4"></i>
                    <h4 class="text-4 mb-2">24/7 Trading</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">Crypto markets are open 24 hours a day
                        because there is no centralized governance of the market, this gives us greater flexibility and
                        access
                    </p>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-5 mt-4"></i>
                    <h4 class="text-4 mb-2">Cost effectiveness</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">Crypto exchanges cut out the intermediaries
                        and allowing peer to peer trading, thus costs can be significantly reduced
                    </p>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="400" data-appear-animation-duration="750">
                <div class="bg-color-dark-100 rounded p-5">
                    <i class="icon-bg icon-feature-6 mt-4"></i>
                    <h4 class="text-4 mb-2">Adaptability</h4>
                    <p class="custom-text-color-1 text-3 color-inherit mb-0">There are currently over 1200 unique
                        Cryptos in circulation, created for specific use cases that illustrate the flexibility of the
                        Cryptocurrency phenomenon</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-5">
    <div class="container pb-5 mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 pe-xl-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-9 mb-1">OUR CRYPTO TRADING STRATEGIES</h2>
                <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">AT Berk Forts , WE
                    UTILIZE A
                    VARIETY OF STRATEGIES AND TECHNIQUES TO DECIDE THE BEST ENTRY/EXIT POINT AND TIMING TO BUY AND SELL
                    CRYPTOCURRENCIES.
                </h5>
                <p class="ls-0 text-default fw-400 mb-5"></p>
                <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                    <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                    <p class="mb-0"><b class="text-color-dark">Fundamental Analysis </b> When doing our fundamental
                        analysis we look at the fundamental
                        indicators of an economy to try and understand whether it is
                        undervalued or overvalued, and how Crude Oil’s value is likely to move relative to another
                        Commodity.
                    </p>
                </div>
                <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                    <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                    <p class="mb-0 mb-0 opacity-5"><b class="text-color-dark">Technical Analysis -</b> Technical
                        Analysis
                        involves reviewing the past and recent behavior of gold and its price trends with the help of
                        charts and sophisticated softwares to determine where the prices will rise or fall.
                    </p>
                </div>
                <div class="d-flex align-items-center pb-4 mb-4">
                    <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                    <p class="mb-0"><b class="text-color-dark">Trend Trading -</b> This involves us identifying any
                        upward or downward trend in oil prices and choosing trade entry and exit points based on the
                        positioning of the commodity price within the trend and the trend's relative strength.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="section-angled-layer-bottom section-angled-layer-increase-angle"
         style="padding: 4rem 0; background: #222529;"></div>
</section>

<div class="container-fluid">
    <div class="row featured-boxes-full">
        <div class="col-lg-3 featured-box-full bg-dark">
            <i class="far fa-life-ring"></i>
            <h4>Day trading</h4>
            <p class="font-weight-light">In day trading we take a position based on anticipated short-term movements,
                and close it out at the end of the trading day.</p>
        </div>
        <div class="col-lg-3 featured-box-full bg-dark-100">
            <i class="fas fa-film"></i>
            <h4>Swing trading</h4>
            <p class="font-weight-light">Swing trading enable us to identify trends as they form, and hold onto the
                position until the trend runs its course or shows signs of a reversal.</p>
        </div>
        <div class="col-lg-3 featured-box-full bg-dark-200">
            <i class="far fa-star"></i>
            <h4>Scalping</h4>
            <p class="font-weight-light">By Scalping we place frequent, intraday trades on minor price movements using
                legitimate methods of arbitrage.</p>
        </div>
        <div class="col-lg-3 featured-box-full bg-dark-300">
            <i class="far fa-edit"></i>
            <h4>Position trading</h4>
            <p class="font-weight-light">If a trend continues for a while, or if it’s hard to predict when the price
                will change direction, ‘Position trading’ is a more risk averse strategy.</p>
        </div>
    </div>
</div>
@endsection
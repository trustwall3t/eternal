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
                        <h1 data-title-border>Metaverse</h1>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="container pb-1">

        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">

                        <span>START CREATING WEALTH THROUGH COMBINING BLOCKCHAIN WITH METAVERSE</span>

                    </h2>
                </div>
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
                            <img alt="" class="img-fluid" style="border-radius: 5px"
                                 src="front/img/meta-banner.png">
                            <img alt="" class="img-fluid" style="border-radius: 5px"
                                 src="front/img/meta-banner2.png">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
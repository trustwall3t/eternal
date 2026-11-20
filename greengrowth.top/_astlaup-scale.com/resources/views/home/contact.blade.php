@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')

@section('title', 'Contact us')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')

 <div class="main">
        
<!-- START SECTION BANNER -->
<section class="hero-section ptb-100 gradient-overlay"
             style="background: url('frontassets3/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class='row'>
                
                <div class="col-md-12 text-center">
                    <div id="google_translate_element"></div>
<script type="text/javascript">
         function googleTranslateElementInit() {
            new google.translate.TranslateElement({ p: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
                                            }
        </script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Get Support</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">Send Us A Message</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section><section class="contact-us-section py-5">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form method="post" action="#"  id="contact-form" class="contact-us-form">
                                                        <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Enter Name *" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" required="required" placeholder="Enter Email *" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Enter Subject" class="form-control" name="subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea required="required" placeholder="Message *" class="form-control" name="msg" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" title="Submit Your Message!"  class="btn secondary-solid-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a Profitable Investment Plan?</h2>
                        <p class="lead">Search no! Click on the button below to get started.</p>

                        <a href="signup.html" class="btn outline-btn align-items-center">Get in touch <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                       <ul class="get-in-touch-list">
                                                                                                 <li class="d-flex align-items-center py-2"><i class="las la-phone"></i><a href="#">+44 7500 415425</a></li>
                        
                                                <li class="d-flex align-items-center py-2"><i class="far fa-envelope-open"></i><a href="#">support@astlaupscale.tech</a></li>
                        
                                                <li class="d-flex align-items-center py-2"><i class="las la-map-marker"></i><a href="#">88 Wood St, Barbican, London EC2V 7QR, United Kingdom</a></li>
                        
                                                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="contact-us-promo py-5">
        <div class="container">
            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <i class="las la-phone"></i>                            </div>
                            <div><h5 class="mb-0">Phone Number</h5>
                                <p class="text-muted mb-0">+44 7500 415425</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <i class="far fa-envelope-open"></i>                            </div>
                            <div><h5 class="mb-0">Email Address</h5>
                                <p class="text-muted mb-0">support@astlaupscale.tech</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <i class="las la-map-marker"></i>                            </div>
                            <div><h5 class="mb-0">Office Address</h5>
                                <p class="text-muted mb-0">88 Wood St, Barbican, London EC2V 7QR, United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
                                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-headphone-alt icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

</div>
<div class="client-section gray-light-bg" style="padding: 10px 0px;">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-01.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-02.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-03.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-04.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-05.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-06.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-07.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="frontassets3/img/clients-logo-08.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>





<style>
   .mgm {
   border-radius: 2px;
   position: fixed;
   z-index: 90;
   bottom: 80px;
   right: 50px;
   background: #fff;
   padding: 10px 27px;
   box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
   }
   .mgm a {
   font-weight: 700;
   display: block;
   color:#f2d516;
   }
   .mgm a, .mgm a:active {
   transition: all .2s ease;
   color:#f2d516;
   }
   .video-container {
   width: 100%;
   max-height: 300px;
   position: relative;
   background-color: #aaaaaa;
   }
   .video-container video {
   width: 100%;
   height: 100%;
   position: absolute;
   object-fit: contain;
   z-index: 0;
   }
   /* Just styling the content of the div, the *magic* in the previous rules */
   .video-container .caption {
   z-index: 1;
   position: relative;
   text-align: center;
   padding: 6%;
   }
   .video-container .caption h2, .video-container .caption p {
   color:#ffffff;
   }
</style>
<div class="mgm notification" style="display: block; opacity: 1;" id="notification-1">
      <!--<div class="txt" style="color:black;">Brian from <b>Maldives</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">$2,000 </strong></div>-->
      <div class="txt" style="color:black;"></div>
   </div>
<script>
var listCountries = ['United Kingdom', 'USA', 'Germany', 'France', 'Italy', 'USA', 'Australia', 'Lesotho', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Kenya', 'Maldives', 'Venezuela', 'South Africa', 'Sweden', 'India', 'Norway', 'Bulgaria', 'Pakistan', 'United Kingdom', 'Spain', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'Indonesia', 'Panama', 'USA', 'Brazil', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['$500','$1500','$1000','$10,000','$2,000','$3000','$4000', '$600', '$700', '$2500','$120,000','$230,600','$190,320','$331,104','$187,901','$371,182','$111,002','$150,500','$90,401','$60,000','$390,100','$410,700','$500,100','$570,400','$590,410','$410,200','$620,000'];
    var listnames = ['Marc Smith','Marco Verratti','Emilia Rudiger','Antonio Conte','Lina Marzouki','Micheal Cyan ','Jane Morison','Williams Blake','James Miller','Dan Spencer','Jack Drew','Victor Oris','Sukomoy','Norbe','Olivia','Alison','Raquel','Lisa','David','Maria','Mary','Gray','Tony','Akash','Dirk', 'Gilbert', 'Mike', 'Jennifer', 'Longwei'];
    var choose = ['Withdrew', 'Deposited'];
    interval = Math.floor(Math.random() * (25000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (25000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var Someone = listnames[Math.floor(Math.random() * listnames.length)];        
        var choose1 = choose[Math.floor(Math.random() * choose.length)];        
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = Someone +' from <b> ' + country + ' </b> just ' + choose1 + ' <strong href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' </strong>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

@endsection
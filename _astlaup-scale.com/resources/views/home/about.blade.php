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
                        <h1 class="text-white mb-0">About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">Astla Upscale</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<section class="promo-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="fas fa-brain icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>STEADY GROWTH</h5>
                            <p>Astla Upscale is a safe and secured option, which ensures steady growth on your investments with daily 
                                returns on an ongoing basis with no hustle and instantly</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="fas fa-bezier-curve icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>RELIABLE SYSTEM</h5>
                            <p>Astla Upscale is backed by team of professionals, experts and specialist of trading market providing 24/7 
                                guidance and support to the users ensuring a reliable system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                        <div class="promo-block-icon mr-4">
                            <span class="fas fa-life-ring icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5>MAXIMUM EFFICIENCY</h5>
                            <p>The most advanced intelligent monitoring technology with high level of professionalism of 
                                Astla Upscale provides safe returns on your investments ensuring maximum efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
        <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap">
                        <img src="frontassets3/img/about-us.jpg" alt="video" class="img-fluid rounded shadow-sm">
                        <br>
                        <br>
                       <img src="frontassets3/img/certificate.html" alt="video" class="img-fluid rounded shadow-sm">
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>About Us</h2>
                        <p>Astla Upscale is an automatic online investment platform established by a team of professional traders focusing mainly 
                            on crypto currency trading over multiple exchanges and market. Adding value to the team of like minded 
                            businessmen specialist in Bitcoin mining. Our company has been growing fast by expanding trade industry 
                            and mining techniques and rolling more elite traders and Miners respectively. Astla Upscale is helping to educate, 
                            provide service for, secure, protect and ultimately profit from this emerging industry. 
                            Anyone all over the world can join Astla Upscale and began earning passive income by taking advantage of 
                            our expertise in Bitcoin mining and crypto currency trading.
                        </p>
                                                    <p>
                            Recently, our company made a successful attempt the international technology market with an 
                            offer of profitable investments in financial investments. Our main aim is to provide safe and 
                            secured returns to our investors with effective and profitable trading and mining solutions 
                            where investors need little or no experience at all about the same. Our investors can choose 
                            one of three lucrative yet simple investment plan with Astla Upscale. If you want to join us, to earn 
                            over a period of long time then all you need to do is to register on our website, make deposit 
                            and sit back and relax while our experts work for you. We are expanding our features by providing 
                            you instant deposit and withdrawals. Use the possibilities of the company and earn on daily basis.
                        </p>
                                                    
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Mission</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Vision</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-2">
                                    <p>The goal of Astla Upscale is to provide its users a unique, safe and secured platform for 
                                        their investments in the field of crypto currency. This is why we have used 
                                        cutting-edge platform with extensive infrastructure intended to make things more 
                                        convenient.</p>

                                                           <p>Due to this technology, our platform is able to make possible of providing real and steady profits on an ongoing daily basis.</p>
                                </div>
                                <div class="tab-pane" id="feature-tab-3">
                                    <p>At Astla Upscale, we commit to provide services we render to our clients. This is why we always try to expand our technical 
                                        capabilities and financial turnover with the help 
                                        of ASIC miners having hands-on experience guarantees for gaining profit by generating crypto currencies.

                                                Astla Upscale envisions to widen the pool of investors by engaging in effective strategic mining and trading of crypto currencies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
        <section class="feature-content-two ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Why Us?</h2>
                        <p class="lead">
                            Here are some of the many features that define our uniqueness.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-headphone-alt icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">24/7 Support</h5>
                        <p>Our customer care service is available at all time to attend to you and also offer profitable advice on the best investment programs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-key icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">Secured Transactions</h5>
                        <p>Your financial future is secured through our multiple investment packages that are suitable for every class.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-lock icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">Strong Security</h5>
                        <p>We offer you an unbeatable interest on your investment within the shortest possible time</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-reload icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">Quick Returns</h5>
                        <p>The system runs on highly encrypted algorithms to protect and secure our user accounts. We have experienced security experts who are constantly fixing threats.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">Our Knowledge</h5>
                        <p>The team of technicians Astla Upscale and the company's financial department monitor key cryptocurrency market trends. We are studying the processes of mining and search the system that will optimize costs and reduce net cost of Bitcoin.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-feature-list p-4 text-center">
                        <span class="ti-thought icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">Our Experience</h5>
                        <p>Our team trades cryptocurrencies since their entry into the wide circulation in 2015, it understands the Bitcoin pricing mechanisms and monitors the main trends at the market. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Globally administrate 24/7 interfaces and end-to-end platforms.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="https://wealthwarpers.com/frontassets3/img/team-1.jpg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="https://wealthwarpers.com/frontassets3/img/team-3.jpg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line relationships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="https://wealthwarpers.com/frontassets3/img/team-2.jpg" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn app-store-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section--><!-- END SECTION TEAM --> 
<section id="faq-section" class="promo-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="section-heading mb-5">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead">
                            Have Any Question?
                        </p>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                
                                
                <div class="col-lg-6">
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What is Astla Upscale?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>A cutting-edge investment platform called Astla Upscale is headquartered in Amsterdam, Netherlands at Johan Huizingalaan 306, 1065 jN. It started in February 2016. We only engage in trading with bots, mining with substantial investment, and holding assets in the forex market.
<br><br>
Using our always-reliable trading bots, Astla Upscale is an international financial networking technology platform that engages in forex and financial trading. These activities are related to trading on financial markets and cryptocurrency exchanges carried out by certified professional traders. Our objective is to offer a steady stream of high income to our clients while reducing any potential risks and delivering a high standard of service that enables us to automate and streamline the interactions between investors and trustees. We strive to make you financially independent.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I create my account?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I make a deposit?</h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-4" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does my deposit take before it can reflect on my Astla Upscale account dashboard?</h6>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                    			</div>
                                    
                <div class="col-lg-6">
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-5" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I make a withdrawal?</h6>
                            </div>
                            <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>To make a withdrawal request click the WITHDRAW button at the top center of your zenith trade account dashboard and input the required details to withdraw</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-6" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-6" aria-expanded="false" aria-controls="collapse-2-6">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does it take to process my withdrawal?</h6>
                            </div>
                            <div id="collapse-2-6" class="collapse" aria-labelledby="heading-2-6"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-7" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-7" aria-expanded="false" aria-controls="collapse-2-7">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Can I have more than one account?</h6>
                            </div>
                            <div id="collapse-2-7" class="collapse" aria-labelledby="heading-2-7"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-8" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-8" aria-expanded="false" aria-controls="collapse-2-8">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Is this company properly registered?</h6>
                            </div>
                            <div id="collapse-2-8" class="collapse" aria-labelledby="heading-2-8"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Yes we are officially and properly registered with the united kingdom company house our company registration number is R05132966 and company house ID 2335443 and registered with the name Astla Upscale LTD</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-9" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-9" aria-expanded="false" aria-controls="collapse-2-9">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Can I have more than two accounts?</h6>
                            </div>
                            <div id="collapse-2-9" class="collapse" aria-labelledby="heading-2-9"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-10" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-10" aria-expanded="false" aria-controls="collapse-2-10">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> how many times can i make a deposit?</h6>
                            </div>
                            <div id="collapse-2-10" class="collapse" aria-labelledby="heading-2-10"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Yes you can make as many deposit as you want on any of our investment plans except the starter plan where you can only invest 3 times after which you make a choice to continue investing with us or not</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                    			</div>
                                    
            </div>
            <!--pricing faq end-->
        </div>
    </section><!-- END SECTION FAQ -->
<!--section id="Blog" class="news">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="title title-center">
					<span>News</span>
					<h2>Latest News About Us</h2>
				</div>
			</div>
			<div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
				<span class="description-content">Onward and upward, productize the deliverables and focus on the bottom line drop-dead date translating our vision of having a market leading platfrom drop-dead date.</span>
			</div>
			<div class="col-xl-12 col-md-12">
				<article class="blog-card wow fadeInUp" data-wow-delay="0.2s">
					<a href="single-post.html" class="image"><img src="https://wealthwarpers.com/frontassets3/img/blog/article-1.jpg" alt="" /></a>
					<div class="article-content">
						<a href="#" class="category"><i class="far fa-folder"></i> Finance</a>
						<a href="#" class="date"><i class="far fa-clock"></i> 25.09.2018</a>
						<a href="#" class="title"><h3>Lower supply is generating high price growth</h3></a>
					</div>
				</article>
				<article class="blog-card wow fadeInUp" data-wow-delay="0.4s">
					<a href="single-post.html" class="image"><img src="https://wealthwarpers.com/frontassets3/img/blog/article-2.jpg" alt="" /></a>
					<div class="article-content">
						<a href="#" class="category"><i class="far fa-folder"></i> Events</a>
						<a href="#" class="date"><i class="far fa-clock"></i> 22.09.2018</a>
						<a href="#" class="title"><h3>Introduction cryptocurrency bills to Congress</h3></a>
					</div>
				</article>
				<article class="blog-card wow fadeInUp" data-wow-delay="0.6s">
					<a href="single-post.html" class="image"><img src="https://wealthwarpers.com/frontassets3/img/blog/article-3.jpg" alt="" /></a>
					<div class="article-content">
						<a href="#" class="category"><i class="far fa-folder"></i> Markets</a>
						<a href="#" class="date"><i class="far fa-clock"></i> 28.08.2018</a>
						<a href="#" class="title"><h3>Is relative value investing time finally here?</h3></a>
					</div>
				</article>
			</div>
			<div class="col-xl-12">
				<a href="blog.html" class="btn mt-3 mt-md-4 light_button">More News</a>
			</div>
		</div>
	</div>
</section--></div>
<!-- END SECTION BLOG -->
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
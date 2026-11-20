@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')


@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
   <div class="main">
        
<!-- START SECTION BANNER -->
<!-- <section class="hero-section ptb-100 gradient-overlay"
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
                       
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>         -->
<!-- END SECTION TEAM --> 
<section class="promo-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="section-heading mb-5">
                 <h2 style="color: white;">Get our investment courses</h2>

                        <p class="lead">
                         
                        </p>
                    </div>
                </div>
            </div>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a;
    color: #ffffff;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 100%; /* Adjusted max-width */
    margin: 50px auto;
    padding: 20px;
    display: flex;
    justify-content: center; /* Center align */
    flex-wrap: wrap;
  }
  .course {
    background-color: #333333;
    border-radius: 10px;
    margin-bottom: 50px; /* Added margin-bottom for spacing */
    width: calc(100% - 40px); /* Adjusted width */
    padding: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
    position: relative;
  }
  .title-box {
    background-color: #E0B88F; /* Fawn color */
    color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
  }
  .course h2 {
    color: #ffffff;
    font-size: 24px; /* Larger title size */
    margin-top: 0;
    margin-bottom: 5px;
  }
  .course h3 {
    color: black;
    font-size: 16px; /* Smaller subtitle size */
    margin-top: 0;
    margin-bottom: 10px;
  }
  .course p {
    font-size: 14px;
    line-height: 1.5;
    margin-top: 10px;
  }
  .features {
    margin-top: 10px;
  }
  .feature {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
  }
  .feature i {
    font-size: 18px;
    margin-right: 10px;
    color: #ffffff;
  }
  .button {
    display: block; /* Changed to block */
    background-color: #007bff; /* Blue color */
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s;
    text-align: center; /* Center align */
    width: 100%; /* Full width */
    margin-top: 20px; /* Space between button and table */
  }
  .button:hover {
    background-color: #0056b3; /* Darker shade of blue on hover */
  }
  .course-border {
    border: 2px solid #ffffff;
    padding: 15px;
    border-radius: 10px;
    margin-top: 40px; /* Adjusted margin */
  }
  .price-tag {
    position: absolute;
    top: -35px; /* Adjusted position */
    right: 0;
    background-color: #333333;
    color: #ffffff;
    padding: 8px 15px; /* Adjusted padding */
    border-radius: 8px; /* Adjusted border-radius */
    font-weight: bold;
    font-size: 18px; /* Increased price tag size */
  }

  /* Responsive Adjustments */
  @media screen and (min-width: 768px) {
    .course {
      width: calc(50% - 20px); /* Adjusted width for tablet/desktop */
    }
  }

  @media screen and (min-width: 992px) {
    .course {
      width: calc(33.33% - 20px); /* Adjusted width for desktop */
    }
  }
</style>
</head>
<body>

<div class="container">

  <div class="course">
    <div class="price-tag">$500</div>
    <div class="title-box">
      <h2>Foundations of Finance</h2>
      <h3>Beginner's Course</h3>
    </div>
    <div class="course-border">
      <p>Dive into the world of investing with this comprehensive course designed for beginners. Learn essential concepts such as stocks, bonds, and mutual funds, and understand how to build a solid investment portfolio.</p>
      <div class="features">
        <div class="feature"><i class="fas fa-book"></i>Introduction to basic investment terminology and principles</div>
        <div class="feature"><i class="fas fa-tasks"></i>Step-by-step guidance on setting financial goals and creating an investment plan</div>
        <div class="feature"><i class="fas fa-chart-line"></i>Practical exercises and real-world examples to reinforce learning</div>
        <div class="feature"><i class="fas fa-users"></i>Access to a supportive online community and expert Q&A sessions</div>
      </div>
    </div>
    <a href="user/login.html" class="button">Get Course</a>
  </div>

  <div class="course">
    <div class="price-tag">$900</div>
    <div class="title-box">
      <h2>Mastering the Markets</h2>
      <h3>Intermediate Course</h3>
    </div>
    <div class="course-border">
      <p>Take your investment knowledge to the next level with this intermediate course. Explore advanced investment strategies, portfolio diversification, and risk management techniques to maximize your wealth-building potential.</p>
      <div class="features">
        <div class="feature"><i class="fas fa-chart-pie"></i>In-depth analysis of various investment vehicles, including options, futures, and ETFs</div>
        <div class="feature"><i class="fas fa-chart-area"></i>Advanced techniques for evaluating stocks and analyzing market trends</div>
        <div class="feature"><i class="fas fa-laptop-code"></i>Hands-on simulations and case studies to enhance decision-making skills</div>
        <div class="feature"><i class="fas fa-comments"></i>Personalized feedback from experienced instructors to fine-tune your investment approach</div>
      </div>
    </div>
    <a href="user/login.html" class="button">Get Course</a>
  </div>

  <div class="course">
    <div class="price-tag">$1500</div>
    <div class="title-box">
      <h2>Advanced Portfolio Management</h2>
      <h3>Advanced Course</h3>
    </div>
    <div class="course-border">
      <p>Elevate your investment game with this elite-level course tailored for experienced investors. Delve into sophisticated portfolio management strategies, alternative investments, and hedge fund strategies to achieve superior returns.</p>
      <div class="features">
        <div class="feature"><i class="fas fa-building"></i>Advanced risk assessment and mitigation strategies for complex investment scenarios</div>
        <div class="feature"><i class="fas fa-globe"></i>In-depth exploration of alternative asset classes, including private equity and real estate</div>
        <div class="feature"><i class="fas fa-chart-bar"></i>Exclusive access to industry insights and guest lectures from top financial experts</div>
        <div class="feature"><i class="fas fa-chart-line"></i>Customized investment simulations and case studies based on real-world market conditions</div>
      </div>
    </div>
    <a href="user/login.html" class="button">Get Course</a>
  </div>

</div>


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
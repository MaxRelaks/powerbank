<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>Energy Hub</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon/favicon-32x32.png')}}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Flaticon CSS -->{asset(){('')}}
    <link rel="stylesheet" href="{{asset('assets/flaticon/flaticon.css')}}">
    <!--Magnific css-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!--Animate css-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

<!-- Start Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dream-load"></div>
    </div>
</div>
<!-- End Preloader -->

<!--Navbar Start-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="index.php">
            <img src="{{asset('assets/img/logo.png')}}" alt="nuxa">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" data-scroll-nav="0">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="1">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="2">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="3">Product</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="4">Faq</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="5">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="6">contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--Navbar End-->

<!-- Welcome Area Start -->
<section class="nuxa-welcome-area fix" data-scroll-index="0">
    <!-- Shape Start -->
    <img src="{{asset('assets/img/hero_bg.png')}}" alt="img" class="welcome-shape">
    <!-- Shape End -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="welcome-text wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Xiaomi <span>Mi</span> Power Bank 3 20 000 mAh</h2>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque.</p>
                    <a href="#" class="nuxa-btn">Order Now</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="welcome-image wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <img class="moving1" src="{{asset('assets/img/hero_img.png')}}" alt="welcome">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Features Area Start -->
<section class="nuxa-features-area section_100" data-scroll-index="1">
    <!-- Dot Shape Strat -->
    <div class="shape-l">
        <img src="{{asset('assets/img/shape-l.png')}}" alt="shape">
    </div>
    <div class="shape-r">
        <img src="{{asset('assets/img/shape-r.png')}}" alt="shape">
    </div>
    <!-- Dot Shape End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Many <span>Features</span> are<br> <span>Available</span> in The Watch</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="feature-icon">
                                <i class="flaticon-crown"></i>
                            </div>
                            <div class="feature-text">
                                <h3>High Quality</h3>
                                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="feature-icon">
                                <i class="flaticon-graphic-design"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Fashionable Design</h3>
                                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="feature-icon">
                                <i class="flaticon-digital"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Latest Technology</h3>
                                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="feature-icon">
                                <i class="flaticon-videocall"></i>
                            </div>
                            <div class="feature-text">
                                <h3>User Friendly</h3>
                                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area End -->

<!-- About Area Start -->
<section class="nuxa-about-area section_100" data-scroll-index="2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <img src="{{asset('assets/img/about.png')}}" alt="about" class=" moving2">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="site-heading">
                        <h2><span>Go for</span> a Run. and leave your phone <span>at home.</span></h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.Donec nec justo eget felis facilisis fermentum.</p>
                    <ul>
                        <li><i class="fa fa-check"></i> Camera Resulation 24 Mega Pixel</li>
                        <li><i class="fa fa-check"></i> Real-time Heart Rate Monitor</li>
                        <li><i class="fa fa-check"></i> Blood-oxygen Level Monitor</li>
                        <li><i class="fa fa-check"></i> Intelligent Activity Tracker</li>
                        <li><i class="fa fa-check"></i> Music and Camera Controls</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->

<!-- Video Area Start -->
<section class="nuxa-video-area section_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="video-inn">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-R6AFn9-ek">
                            <i class="flaticon-play"></i>
                        </a>
                        <div class="site-heading">
                            <h2><span>Best Product</span> For You.<br> Check The <span>Demo Video</span>.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Area End -->

<!-- Choose Area Start -->
<section class="nuxa-choose-area section_100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-7">
                <div class="choose-left">
                    <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <h2>We are providing <span>best</span> and<br> <span>high quality</span> products.</h2>
                    </div>
                    <ul>
                        <li class="active choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="choose-icon">
                                <i class="flaticon-crown"></i>
                            </div>
                            <div class="choose-text">
                                <h3>High Quality</h3>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                            </div>
                        </li>
                        <li class="choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="choose-icon">
                                <i class="flaticon-graphic-design"></i>
                            </div>
                            <div class="choose-text">
                                <h3>Fashionable Design</h3>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                            </div>
                        </li>
                        <li class="choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="choose-icon">
                                <i class="flaticon-digital"></i>
                            </div>
                            <div class="choose-text">
                                <h3>Latest Technology</h3>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-5">
                <div class="choose-right wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <img src="{{asset('assets/img/choose_img.png')}}" alt="product" class="moving3">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->

<!-- Product Area Start -->
<section class="nuxa-product-area section_100" data-scroll-index="3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Check <span>the best</span> collection<br> of our <span>products</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="product_img">
                        <img src="{{asset('assets/img/product_1.png')}}" alt="img">
                    </div>
                    <div class="product_text">
                        <h3>Black Watch Pro</h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <div class="pro-meta">
                            <div class="price">
                                <h2>$40</h2>
                            </div>
                            <div class="pro-action">
                                <a href="#" class="nuxa-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="product_img">
                        <img src="{{asset('assets/img/product_2.png')}}" alt="img">
                    </div>
                    <div class="product_text">
                        <h3>White Watch Max</h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <div class="pro-meta">
                            <div class="price">
                                <h2>$47</h2>
                            </div>
                            <div class="pro-action">
                                <a href="#" class="nuxa-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                    <div class="product_img">
                        <img src="{{asset('assets/img/product_3.png')}}" alt="img">
                    </div>
                    <div class="product_text">
                        <h3>Blue Watch Pro</h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <div class="pro-meta">
                            <div class="price">
                                <h2>$54</h2>
                            </div>
                            <div class="pro-action">
                                <a href="#" class="nuxa-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Area End -->

<!-- Faq Area Start -->
<section class="nuxa-faq-area section_100" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-right">
                    <img src="{{asset('assets/img/faqs.png')}}" alt="faqs">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-left">
                    <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <h2>Frequently Asked <span>Questions</span></h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    How to buy the products? #1
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much price of the product? #2
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can i get refund? #3
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.3s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How to use the product? #4
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Area End -->

<!-- Testimonial Section Start -->
<section class="nuxa-testimonial-area section_100" data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Some <span>reviews</span> from <br> our clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-pos">
                    <h3>feedback</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-item">
                        <div class="client-image">
                            <img src="{{asset('assets/img/t3.png')}}" alt="testimonial">
                        </div>
                        <div class="testimonial-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit Lorem sit dix dolor sit. consectetur adipiscing. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit Lorem ipsum dolor sit. consectetur adipiscing elit. </p>
                        </div>
                        <div class="testimonial-meta">
                            <h3>Lina doris</h3>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="client-image">
                            <img src="{{asset('assets/img/t1.png')}}" alt="testimonial">
                        </div>
                        <div class="testimonial-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit. consectetur adipiscing. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit Lorem ipsum dolor sit. consectetur adipiscing elit. </p>
                        </div>
                        <div class="testimonial-meta">
                            <h3>knot williams</h3>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Contact Area Start -->
<section class="nuxa-contact-area section_100" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Lets Get In <span>Touch</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="contact-info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Our head office</h3>
                            <p>202, Grasselli Street.</p>
                        </div>
                    </div>
                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Call Us On</h3>
                            <p>9123-456-78</p>
                        </div>
                    </div>
                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
                        <div class="contact-info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Email Us At</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <div class="heading-line-two"></div>
                    <div id="notification"></div>
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p>
                                    <input class="form-control" type="text" placeholder="Name" name="name">
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p>
                                    <input class="form-control" type="text" placeholder="Subject" name="subject">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    <input class="form-control" type="email" placeholder="E-mail" name="email">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input class="form-control" type="tel" placeholder="Phone" name="phone">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <textarea class="form-control" placeholder="Your Message..." name="message"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <button type="submit" class="nuxa-btn">Send Message <span></span></button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Footer Area Start -->
<footer class="nuxa-footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-box">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{asset('assets/img/footer-logo.png')}}" alt="footer logo"></a>
                    </div>
                    <div class="footer-copyright">
                        <p>Copyright &copy; Deveable 2021.</p>
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!--Jquery js-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!--Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!--ScrollIt js-->
<script src="{{asset('assets/js/scrollIt.min.js')}}"></script>
<!--Owl-Carousel js-->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!--Magnific js-->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--Mouse Effect js-->
<script src="{{asset('assets/js/mouse-effect.js')}}"></script>
<!--Initial js-->
<script src="{{asset('assets/js/init.js')}}"></script>
<!--Wow js-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--Main js-->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>


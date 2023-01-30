<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>Energy Hub</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{asset('../../css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon/favicon-32x32.png')}}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Flaticon CSS -->
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
            <img src="{{asset('assets/img/logo.png')}}" alt="Energy Hub" class="img-logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" data-scroll-nav="0">Замовити</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="1">Переваги</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="2">Характеристика</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link" data-scroll-nav="3">Комплектація</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="4">Faq</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link" data-scroll-nav="5">Testimonial</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link" data-scroll-nav="6">Контакти</a>
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
                    <div>
                        <a href="https://www.olx.ua/d/uk/obyavlenie/umb-xiaomi-mi-power-bank-3-20000-mah-usb-c-18w-IDQzwS5.html?bs=olx_pro_listing&isPreviewActive=0&sliderIndex=0" class="nuxa-btn">Замовити</a><h2 class="welcome-price"> <span>1799 грн.</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="welcome-image wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <img class="moving1" src="{{asset('assets/img/1-power.png')}}" alt="welcome">
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
                    <h2>Переваги <span>Powerbank </span><br> <span>Xiaomi</span> Mi 3 20000 mAh</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="feature-icon">
                                <img src="{{asset('assets/img/Benefits_volume.png')}}" alt="shape">
                            </div>
                            <div class="feature-text">
                                <h3>Ємність</h3>
                                <p>Зовнішній акумулятор може похвалитися потужним обсягом пам'яті на 20 000 мА*год, якого вистачить для роботи, повсякденного життя, відпустки й не тільки. Завдяки величезній ємності та 3 інтерфейсним портам (1xUSB-C, 2xUSB-A).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="feature-icon">
                                <img src="{{asset('assets/img/Benefits_Battery.png')}}" alt="shape">
                            </div>
                            <div class="feature-text">
                                <h3>Швидка зарядка</h3>
                                <p>Інтерфейс USB-C підтримує двобічне швидке заряджання 18 Вт (максимум), що неабияк скорочує час заряджання. Також повербанк підтримує технологію Qualcomm Quick Charge 3.0.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="feature-icon">
                                <img src="{{asset('assets/img/Benefits_proc.png')}}" alt="shape">
                            </div>
                            <div class="feature-text">
                                <h3>Додаткові можливості</h3>
                                <p>У повербанк інтегрований чип з інтелектуальною системою, яка визначає потрібну потужність. Отже, Xiaomi Mi Power Bank 3 може заряджати не тільки телефони, а й різні smart-пристрої: планшети та комутатори. Двічі натиснувши на кнопку, ви зможете активувати режим мікрострумового заряджання й заряджати ношені пристрої та інші пристрої з низьким енергоспоживанням.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="feature-box wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="feature-icon">
                                <img src="{{asset('assets/img/Benefits_connector.png')}}" alt="shape">
                            </div>
                            <div class="feature-text">
                                <h3>Багатопотоковість</h3>
                                <p>Type-C та два USB-виходи та можуть бути використані для заряджання декількох мобільних телефонів та інших девайсів одночасно.</p>
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
                    <img src="{{asset('assets/img/2-power.png')}}" alt="about" class="moving2, img-min">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="site-heading">
                        <h2>Характеристики <br> <span>Xiaomi</span> Mi 3 20000 mAh</h2>
                    </div>
                    <ul>
                        <li><i class="fa fa-check"></i> Тип акумулятора: Літій-іонний</li>
                        <li><i class="fa fa-check"></i> Ємність акумулятора: 20000 mA*год 3.7В 74Вт*год</li>
                        <li><i class="fa fa-check"></i> Номінальна ємність: 12000 mA*год (5В 3.6А)</li>
                        <li><i class="fa fa-check"></i> Максимальна вихідна потужність 18 Вт</li>
                        <li><i class="fa fa-check"></i> Можливість підключення декількох пристроїв</li>
                        <li><i class="fa fa-check"></i> Підтримка зарядки малим струмом</li>
                        <li><i class="fa fa-check"></i> Підтримка протоколів швидкої зарядки</li>
                        <li><i class="fa fa-check"></i> Вихідний інтерфейс: 2 х USB-A, USB-C</li>
                        <li><i class="fa fa-check"></i> Вхідний інтерфейс: Micro-USB, USB-C</li>
                        <li><i class="fa fa-check"></i> Близько 11 годин (зарядний пристрій на 5В 2A)</li>
                        <li><i class="fa fa-check"></i> Близько 6.5 годин (зарядний пристрій на 18 Вт)</li>
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
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=SP_aoqjFBRY">
                            <i class="flaticon-play"></i>
                        </a>
                        <div class="site-heading">
                            <h2><span>Відео огляд</span> Повербанку.</h2>
                        </div>
                        <p>Перегляньте відео огляд повербанку Xiaomi Mi 3 20 000 mAh 18W, та переконайтеся у його якості, надійності та перевагах.</p>
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
                        <h2>Комплектація <span>Xiaomi</span> Mi<br> <span>Powerbank 3</span> 20 000 mAh</h2>
                    </div>
                    <ul>
                        <li class="active choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="choose-icon">
                                <img src="{{asset('assets/img/battery.png')}}" alt="Повербанк">
                            </div>
                            <div class="choose-text">
                                <h3>Повербанк</h3>
                                <p>Повербанк Xiaomi Mi 3 20 000 MAh 18W білого кольору.</p>
                            </div>
                        </li>
                        <li class="choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="choose-icon">
                                <img src="{{asset('assets/img/connector.png')}}" alt="Type-C">
                            </div>
                            <div class="choose-text">
                                <h3>Type-C кабель</h3>
                                <p>Якісний USB Type-A > Type-C кабель довжиною 30 см. білого кольору.</p>
                            </div>
                        </li>
                        <li class="choose-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="choose-icon">
                                <i class="flaticon-crown"></i>
                            </div>
                            <div class="choose-text">
                                <h3>Якість</h3>
                                <p>Гарні враження, якісну річ та додаткові mAh для ваших девайсів.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-5">
                <div class="choose-right wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <img src="{{asset('assets/img/3-power.png')}}" alt="product" class="moving3">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose Area End -->

{{--<!-- Product Area Start -->--}}
{{--<section class="nuxa-product-area section_100" data-scroll-index="3">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">--}}
{{--                    <h2>Check <span>the best</span> collection<br> of our <span>products</span></h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">--}}
{{--                    <div class="product_img">--}}
{{--                        <img src="{{asset('assets/img/product_1.png')}}" alt="img">--}}
{{--                    </div>--}}
{{--                    <div class="product_text">--}}
{{--                        <h3>Black Watch Pro</h3>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                        </ul>--}}
{{--                        <div class="pro-meta">--}}
{{--                            <div class="price">--}}
{{--                                <h2>$40</h2>--}}
{{--                            </div>--}}
{{--                            <div class="pro-action">--}}
{{--                                <a href="#" class="nuxa-btn">Order Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">--}}
{{--                    <div class="product_img">--}}
{{--                        <img src="{{asset('assets/img/product_2.png')}}" alt="img">--}}
{{--                    </div>--}}
{{--                    <div class="product_text">--}}
{{--                        <h3>White Watch Max</h3>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                        </ul>--}}
{{--                        <div class="pro-meta">--}}
{{--                            <div class="price">--}}
{{--                                <h2>$47</h2>--}}
{{--                            </div>--}}
{{--                            <div class="pro-action">--}}
{{--                                <a href="#" class="nuxa-btn">Order Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="product_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">--}}
{{--                    <div class="product_img">--}}
{{--                        <img src="{{asset('assets/img/product_3.png')}}" alt="img">--}}
{{--                    </div>--}}
{{--                    <div class="product_text">--}}
{{--                        <h3>Blue Watch Pro</h3>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                        </ul>--}}
{{--                        <div class="pro-meta">--}}
{{--                            <div class="price">--}}
{{--                                <h2>$54</h2>--}}
{{--                            </div>--}}
{{--                            <div class="pro-action">--}}
{{--                                <a href="#" class="nuxa-btn">Order Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- Product Area End -->--}}

<!-- Faq Area Start -->
<section class="nuxa-faq-area section_100" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-right">
                    <img src="{{asset('assets/img/4-power.png')}}" alt="faqs">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-left">
                    <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <h2>Часті <span>запитання</span></h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Як замовити повербанк?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>Щоб вам було зручно у нас два варіанти замовлення повербанку. Перший через наш сайт, вам потрібно натиснути на кнопку "Замовивти" в верхній частині сайту, заповнити форму та оплатити товар. Другий "OLX Доставка", для користувачів яким зручно користуватися ОLX сервісом.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Якими поштовими сервісами ви відправляєте товар?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>Для відправки товару ми використовуємо "Укр. Пошту" та "Нову пошту".</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Як відслідковувати товар після замовлення?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>Якщо ви замовили через наш сайт, то після передачі товару в поштове відділення вам на пошту надійте ТТН за яким ви зможете відслідковувати посилку. Якщо замовили через ОLX, то ТТН ви зможете отримати в особистому кабінеті.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_faq_accordian wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.3s">
                            <div class="faq_accordian_header">
                                <a href="#" class="collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Повербанк оригінальний?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="faq_accordian_body">
                                    <p>Так. Після одержання повербанку ви зможете в цьому переконатися перевіривши його оригінальність на сайті mi.com</p>
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

{{--<!-- Testimonial Section Start -->--}}
{{--<section class="nuxa-testimonial-area section_100" data-scroll-index="5">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">--}}
{{--                    <h2>Some <span>reviews</span> from <br> our clients</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="testimonial-pos">--}}
{{--                    <h3>feedback</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="testimonial-slider owl-carousel">--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="client-image">--}}
{{--                            <img src="{{asset('assets/img/t3.png')}}" alt="testimonial">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-body">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit Lorem sit dix dolor sit. consectetur adipiscing. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit Lorem ipsum dolor sit. consectetur adipiscing elit. </p>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-meta">--}}
{{--                            <h3>Lina doris</h3>--}}
{{--                            <ul>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star-half-o"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="client-image">--}}
{{--                            <img src="{{asset('assets/img/t1.png')}}" alt="testimonial">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-body">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit. consectetur adipiscing. Nulla mauris dolor, gravida a varius blandit, Lorem ipsum dolor sit Lorem ipsum dolor sit. consectetur adipiscing elit. </p>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-meta">--}}
{{--                            <h3>knot williams</h3>--}}
{{--                            <ul>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star-half-o"></i></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- Testimonial Section End -->--}}

<!-- Contact Area Start -->
<section class="nuxa-contact-area section_100" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h2>Якщо виникли <span>запитання</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
{{--                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">--}}
{{--                        <div class="contact-info-icon">--}}
{{--                            <i class="fa fa-map-marker"></i>--}}
{{--                        </div>--}}
{{--                        <div class="contact-info-text">--}}
{{--                            <h3>Our head office</h3>--}}
{{--                            <p>202, Grasselli Street.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Телефон/Телеграм</h3>
                            <p>+380 66 662 6716<br>+380 50 536 7232</p>
                        </div>
                    </div>
                    <div class="single-contact-info wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
                        <div class="contact-info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h3>Email</h3>
                            <p>support@energy-hub.ml</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <div class="heading-line-two"></div>
                    <div id="notification"></div>
                    <form id="contact-form" method="post" action="{{route('feedback')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p>
                                    <input class="form-control" required type="text" placeholder="Ім'я" name="user_name">
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p>
                                    <input class="form-control" type="text" placeholder="Тема" name="user_subject">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    <input class="form-control" required type="email" placeholder="E-mail" name="user_email">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <input class="form-control" type="tel" placeholder="Телефон" name="user_phone">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <textarea class="form-control" required placeholder="Ваше повідомлення..." name="user_message"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <button type="submit" class="nuxa-btn">Надіслати <span></span></button>
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
                        <a href="index.html"><img src="{{asset('assets/img/footer_Power.png')}}" alt="footer logo"></a>
                    </div>
                    <div class="footer-copyright">
                        <p>Надійний партнер під час блекауту</p>
                    </div>
                    <div class="footer-social">
{{--                        <ul>--}}
{{--                            <a href="https://www.olx.ua/"><img src="{{asset('assets/img/olx.png')}}" alt="OLX"></a>--}}
{{--                        </ul>--}}
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


@extends('layouts.master')

@section('content')
    <div class="slider__area slider--two">
        <div class="slider__activation--1">
            <!-- Start Single Slide -->
            <div class="slide fullscreen bg-image--7 poss--relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="slider__content">
                                <div class="slider__inner">
                                    <div class="slider__text__img">
                                        <img class="layear-1" src="{{ asset('images/slider/text/2.png') }}" alt="slider text image">
                                        <img class="layear-2" src="{{ asset('images/slider/text/1.png') }}" alt="slider text image">
                                    </div>
                                    <div class="slider__input">
                                        @if (\Illuminate\Support\Facades\Auth::guest())
                                            <h3>You must be logged in to make reservation</h3>
                                        @else
                                            @if()
                                            <h3 style="color: black;;">Seats are available. Walk in directly!</h3>
                                            <div class="src__btn">
                                                <a href="#">Join the ueue</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide__pizza">
                    <img src="{{ asset('images/shape/slider-pizza.png') }}" alt="pizza images">
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>

    <section class="fd__about__area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <!-- Start Single About -->
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center">
                    <div class="fd__about__center foo">
                        <div class="fd__about">
                            <div class="section__title service__align--left">
                                <p>Best product, Best service</p>
                                <h2 class="title__line">About HOTPOT HERO</h2>
                            </div>
                            <h4>Best Service  For Our Customer</h4>
                            <p>Lorem ipsum dolor sit amet, cotnsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single About -->
                <!-- Start Single Adout -->
                <div class="col-lg-4 col-md-6 col-sm-12 sm--mt--40 md--mt--40">
                    <div class="about wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about__thumb">
                            <img src="{{ asset('images/about/1.jpg') }}" alt="about images">
                            <div class="pro__offer">
                                <div class="pro__offer__inner">
                                    <div class="pro__offer__inner__inner">
                                        <span class="fd__diccount">50%</span>
                                        <span>Discount</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__details">
                            <h2>For All <span>“Montanara”</span> HOTPOT</h2>
                            <p>Don’t Delay to Order</p>
                            <div class="about__btn">
                                <a class="food__btn white--btn" href="about-us.html">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Adout -->
                <!-- Start Single Adout -->
                <div class="col-lg-4 col-md-6 col-sm-12 md--mt--40 sm--mt--40">
                    <div class="about bg--yellow wow fadeInRight" data-wow-delay="0.3s">
                        <div class="about__thumb">
                            <img src="{{ asset('images/about/2.jpg') }}" alt="about images">
                            <div class="pro__offer">
                                <div class="pro__offer__inner">
                                    <div class="pro__offer__inner__inner">
                                        <span class="fd__diccount">50%</span>
                                        <span>Discount</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__details">
                            <h2>For All <span>“Montanara”</span> HOTPOT</h2>
                            <p>Don’t Delay to Order</p>
                            <div class="about__btn">
                                <a class="food__btn white--btn" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Adout -->
            </div>
        </div>
    </section>

    <section class="fd__pizza__area bg-image--25 section-padding--lg">
        <div class="bg__cat">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title service__align--left">
                            <p>The process of our service </p>
                            <h2 class="title__line">Our Special HOTPOT</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <!-- Start Single Pizza -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pizza foo">
                            <div class="pizza__thumb">
                                <img src="{{ asset('images/product/hotpot/1.jpg') }}" alt="pizza images">
                                <div class="pizza__hover__action">
                                    <span class="pizza__prize">$80</span>
                                </div>
                            </div>
                            <div class="pizza__details">
                                <h2 class="pizza__title"><a href="#">Ddfgdfgdfg</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                <div class="pizza__btn">
                                    <a class="food__btn white--btn theme--hover" href="#">Order Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pizza -->
                    <!-- Start Single Pizza -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pizza foo">
                            <div class="pizza__thumb">
                                <img src="{{ asset('images/product/hotpot/1.jpg') }}" alt="pizza images">
                                <div class="pizza__hover__action">
                                    <span class="pizza__prize">$50</span>
                                </div>
                            </div>
                            <div class="pizza__details">
                                <h2 class="pizza__title"><a href="#">Sdfgdfg</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                <div class="pizza__btn">
                                    <a class="food__btn white--btn theme--hover" href="#">Order Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pizza -->
                    <!-- Start Single Pizza -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pizza foo">
                            <div class="pizza__thumb">
                                <img src="{{ asset('images/product/hotpot/1.jpg') }}" alt="pizza images">
                                <div class="pizza__hover__action">
                                    <span class="pizza__prize">$70</span>
                                </div>
                            </div>
                            <div class="pizza__details">
                                <h2 class="pizza__title"><a href="#">Rdfsdfsf</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectadipisicing labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                <div class="pizza__btn">
                                    <a class="food__btn white--btn theme--hover" href="#">Order Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pizza -->
                </div>
            </div>
        </div>
        <div class="order-now-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="fd__order__now text-center">
                            <div class="order__now__inner">
                                <h6>We Offer Free Delivery</h6>
                                <h2>Order Now: +123654789</h2>
                                <p>Extremely thin ,juicy,cheeze,fluffy,crispy & light weight</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fd__counterup__area funfact--2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="counter__up__inner d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between text-center">
                        <!-- Start Single Fact -->
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__icon">
                                        <img src="{{ asset('images/icon/flat-icon/1.png') }}" alt="flat icon">
                                    </div>
                                    <div class="fact__count ">
                                        <span class="count">2456</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Food</h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                        <!-- Start Single Fact -->
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__icon">
                                        <img src="{{ asset('images/icon/flat-icon/2.png') }}" alt="flat icon">
                                    </div>
                                    <div class="fact__count">
                                        <span class="count">2056</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Chef</h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                        <!-- Start Single Fact -->
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__icon">
                                        <img src="{{ asset('images/icon/flat-icon/3.png') }}" alt="flat icon">
                                    </div>
                                    <div class="fact__count ">
                                        <span class="count">3000</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Menu</h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="resturent__food__menu bg-image--8 section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title service__align--center">
                        <p>All delicious hotpot menu  for hotpot lovers</p>
                        <h2 class="title__line">Restaurant with Special Menu</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="resturent__food__menu plr--250px mt--80 d-flex flex-wrap">
            <!-- Start Single Resturent Food -->
            <div class="single__resturent__food d-flex">
                <div class="resturent__thumb">
                    <a href="#">
                        <img src="{{ asset('images/product/restu/1.png') }}" alt="resturent image">
                    </a>
                </div>
                <div class="resturent__details d-flex flex-column justify-content-center">
                    <ul class="res__pizz__size d-flex justify-content-center">
                        <li>small <span>$20</span></li>
                        <li>Medium <span>$40</span></li>
                        <li>Large <span>$50</span></li>
                    </ul>
                    <h4><a href="#">Maxican Food Fev</a></h4>
                    <h6>Friends & Family Restaurant</h6>
                    <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a hotpot,</p>
                    <div class="res__btn">
                        <a class="food__btn" href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- End Single Resturent Food -->
            <!-- Start Single Resturent Food -->
            <div class="single__resturent__food d-flex">
                <div class="resturent__thumb">
                    <a href="#">
                        <img src="{{ asset('images/product/restu/2.png') }}" alt="resturent image">
                    </a>
                </div>
                <div class="resturent__details d-flex flex-column justify-content-center">
                    <ul class="res__pizz__size d-flex justify-content-center">
                        <li>small <span>$20</span></li>
                        <li>Medium <span>$20</span></li>
                        <li>Large <span>$60</span></li>
                    </ul>
                    <h4><a href="#">Chongqing asdfsd sdf</a></h4>
                    <h6>Friends & Family Restaurant</h6>
                    <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a hotpot,</p>
                    <div class="res__btn">
                        <a class="food__btn" href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- End Single Resturent Food -->
            <!-- Start Single Resturent Food -->
            <div class="single__resturent__food d-flex">
                <div class="resturent__thumb">
                    <a href="#">
                        <img src="{{ asset('images/product/restu/3.png') }}" alt="resturent image">
                    </a>
                </div>
                <div class="resturent__details d-flex flex-column justify-content-center">
                    <ul class="res__pizz__size d-flex justify-content-center">
                        <li>small <span>$30</span></li>
                        <li>Medium <span>$40</span></li>
                        <li>Large <span>$20</span></li>
                    </ul>
                    <h4><a href="#">Sichuan sdfsdf dsfsdf</a></h4>
                    <h6>Friends & Family Restaurant</h6>
                    <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a hotpot,</p>
                    <div class="res__btn">
                        <a class="food__btn" href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- End Single Resturent Food -->
            <!-- Start Single Resturent Food -->
            <div class="single__resturent__food d-flex">
                <div class="resturent__thumb">
                    <a href="#">
                        <img src="{{ asset('images/product/restu/4.png') }}" alt="resturent image">
                    </a>
                </div>
                <div class="resturent__details d-flex flex-column justify-content-center">
                    <ul class="res__pizz__size d-flex justify-content-center">
                        <li>small <span>$10</span></li>
                        <li>Medium <span>$60</span></li>
                        <li>Large <span>$20</span></li>
                    </ul>
                    <h4><a href="#">Sichuan sdafsdf asdfsdf</a></h4>
                    <h6>Friends & Family Restaurant</h6>
                    <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a hotpot,</p>
                    <div class="res__btn">
                        <a class="food__btn" href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- End Single Resturent Food -->
        </div>
    </section>

    <section class="clint__demand__area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title service__align--center">
                        <p>The process of our service </p>
                        <h2 class="title__line">Most popular Cuisine For Client Demand</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <!-- Start Single Clint Demand -->
                <div class="col-lg-4 col-md-6">
                    <div class="clint__demand">
                        <div class="clnt__demand__thumb">
                            <img src="{{ asset('images/product/popular/1.png') }}" alt="Demand images">
                        </div>
                        <div class="clnt__thumb__hover">
                            <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.2s">
                                <img src="{{ asset('images/product/popular/sm-img/1.png') }}" alt="small images">
                            </div>
                            <div class="demand__food__prize">
                                <span>$80</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Cheef</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type :Mixed Fruit Custard</p>
                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                            </div>
                            <ul class="rating">
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Clint Demand -->
                <!-- Start Single Clint Demand -->
                <div class="col-lg-4 col-md-6">
                    <div class="clint__demand">
                        <div class="clnt__demand__thumb">
                            <img src="{{ asset('images/product/popular/2.png') }}" alt="Demand images">
                        </div>
                        <div class="clnt__thumb__hover">
                            <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.3s">
                                <img src="{{ asset('images/product/popular/sm-img/2.png') }}" alt="small images">
                            </div>
                            <div class="demand__food__prize">
                                <span>$80</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Pork</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type :Mixed Fruit Custard</p>
                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                            </div>
                            <ul class="rating">
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Clint Demand -->
                <!-- Start Single Clint Demand -->
                <div class="col-lg-4 col-md-6">
                    <div class="clint__demand">
                        <div class="clnt__demand__thumb">
                            <img src="{{ asset('images/product/popular/1.png') }}" alt="Demand images">
                        </div>
                        <div class="clnt__thumb__hover">
                            <div class="clnt__thumb__hover__action wow zoomIn" data-wow-delay="0.4s">
                                <img src="{{ asset('images/product/popular/sm-img/3.png') }}" alt="small images">
                            </div>
                            <div class="demand__food__prize">
                                <span>$80</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Checken</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type :Mixed Fruit Custard</p>
                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                            </div>
                            <ul class="rating">
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li><i class="zmdi zmdi-star"></i></li>
                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Clint Demand -->
            </div>
        </div>
    </section>

    <section class="fd__testimonial__area testimonial--2 bg-image--9 ptb--150">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fd__testimonial__container testimonial__activation--2">
                        <!-- Start Single Testimonial -->
                        <div class="single__testimonial d-flex justify-content-between flex-wrap">
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="single__testimonial d-flex justify-content-between flex-wrap">
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="single__testimonial d-flex justify-content-between flex-wrap">
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Lorem ipsum dolor samconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. veniam,</p>
                                <div class="fd__test__info">
                                    <h6>Mily Cyrus</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fd__subscribe__area bg--white subscribe--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subscribe__inner">
                        <h2>Subscribe to our newsletter</h2>
                        <div id="mc_embed_signup">
                            <div id="enter__email__address">
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                        <div class="news__input">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="banner__area d-flex instagram__activation owl-carousel owl-theme">
        <div class="banner">
            <img src="{{ asset('images/product/ins/1.jpg') }}" alt="images">
            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
        </div>
        <div class="banner">
            <img src="{{ asset('images/product/ins/2.jpg') }}" alt="images">
            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
        </div>
        <div class="banner">
            <img src="{{ asset('images/product/ins/3.jpg') }}" alt="images">
            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
        </div>
        <div class="banner">
            <img src="{{ asset('images/product/ins/4.jpg') }}" alt="images">
            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
        </div>
        <div class="banner">
            <img src="{{ asset('images/product/ins/5.jpg') }}" alt="images">
            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
    <div class="slider__area slider--two" ng-controller="queueController">
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
                                    <div id="tips" style="display:none">123132</div>
                                    <div id="online" style="display:none">123132</div>
                                    <div class="slider__input">
                                        @if (\Illuminate\Support\Facades\Auth::guest())
                                            <h3>You must be logged in to make reservation!</h3>
                                        @else
                                            @if($queue == 0)
                                                <h3 style="color: black;margin-top: 15px;">Seats are available. Walk in directly!</h3>
                                            @else
                                                <h3 style="color: black;margin-top: 15px;" ng-show="isQueue == 'NO'">Join the queue for a random seat now!</h3>
                                                <div class="src__btn" style="padding-left: 200px">
                                                    <a ng-click="makeQueue()" ng-show="isQueue == 'NO'">Join the Queue</a>
                                                    {{--<a ng-show="queued.status = '200'">Queue Success</a>--}}
                                                </div>

                                                <h3 style="color: black;margin-top: 15px; padding-right: 200px" ng-show="isQueue == 'YES'">Queue Success! You can go here about @{{ queued.reservation_start }}</h3>
                                            @endif
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
                                <h2 class="title__line">Recent Promotion</h2>
                            </div>
                            <h4>Best Promotion For Our Customers</h4>
                            <p>In chinese new year period, all customers can enjoy 50% discount for lamb roll and dried pork slices</p>
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
                            <h2>For All <span>“Lamb roll”</span> dishes</h2>
                            <p>Don’t hesitate to Order</p>
                            {{--<div class="about__btn">--}}
                                {{--<a class="food__btn white--btn" href="about-us.html">Order Now</a>--}}
                            {{--</div>--}}
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
                            <h2>For All <span>“Pork slices”</span> dishes</h2>
                            <p>Don’t hesitate to Order</p>
                            {{--<div class="about__btn">--}}
                                {{--<a class="food__btn white--btn" href="#">Order Now</a>--}}
                            {{--</div>--}}
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
                            <p>The popular choices of </p>
                            <h2 class="title__line">Combos</h2>
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
                                    <span class="pizza__prize">$40</span>
                                </div>
                            </div>
                            <div class="pizza__details">
                                <h2 class="pizza__title"><a href="#">Combo 1</a></h2>
                                <p>1 x lamb rolls, 1 x beef slices, 1 x carrot slices, 1 x mushroom, 2 x soft drinks, unlimited rice. Spend $40 Only ! </p>
                                {{--<div class="pizza__btn">--}}
                                    {{--<a class="food__btn white--btn theme--hover" href="#">Order Online</a>--}}
                                {{--</div>--}}
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
                                <h2 class="pizza__title"><a href="#">Combo 2</a></h2>
                                <p>1 x pork slices, 2 x chicken rolls, 1 x potato slices, 2 x any vegetable, 2 x soft drinks, unlimited while rice. Spend $50 Only ! </p>
                                {{--<div class="pizza__btn">--}}
                                    {{--<a class="food__btn white--btn theme--hover" href="#">Order Online</a>--}}
                                {{--</div>--}}
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
                                    <span class="pizza__prize">$30</span>
                                </div>
                            </div>
                            <div class="pizza__details">
                                <h2 class="pizza__title"><a href="#">Combo 3</a></h2>
                                <p>1 x Lamb rolls, 2 x any vegetable, 1 x tomato slices, 2 x soft drinks, unlimited while rice. Spend $30 Only ! </p>
                                {{--<div class="pizza__btn">--}}
                                    {{--<a class="food__btn white--btn theme--hover" href="#">Order Online</a>--}}
                                {{--</div>--}}
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
                 <h6>&nbsp;</h6>
                 <h2>Welcome to Hotpot Hero!</h2>
                 <p>&nbsp;</p>
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

    <section class="restaurant__food__menu bg-image--8 section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title service__align--center">
                        <p>All delicious hotpot menu  for hotpot lovers</p>
                        <h2 class="title__line">Most popular base soups</h2>
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
                        <li>Large <span>$60</span></li>
                    </ul>
                    <h4><a href="#">Two-flavor hot pot </a></h4>
                    <h6>Both spicy and not spicy soup</h6>
                    <p>The two-flavor hot pot divide into two base soup, which is best for both spicy lover and people who can't bear spicy</p>
                    {{--<div class="res__btn">--}}
                        {{--<a class="food__btn" href="#">Order Now</a>--}}
                    {{--</div>--}}
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
                        <li>small <span>$30</span></li>
                        <li>Medium <span>$50</span></li>
                        <li>Large <span>$70</span></li>
                    </ul>
                    <h4><a href="#">Seafood family</a></h4>
                    <h6>For seafood lovers</h6>
                    <p>The seafood family base soup is designed for seafood lovers.It is full of many seafood such as prawn, oyster and so on</p>
                    {{--<div class="res__btn">--}}
                        {{--<a class="food__btn" href="#">Order Now</a>--}}
                    {{--</div>--}}
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
                    <h4><a href="#">Sichuan</a></h4>
                    <h6>Friends & Family Restaurant</h6>
                    <p>Provolone is the second most popular one. Cheddar may be mixed with Mozzarella to preserve armesan may be added to the top of a hotpot,</p>
                    {{--<div class="res__btn">--}}
                        {{--<a class="food__btn" href="#">Order Now</a>--}}
                    {{--</div>--}}
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
                        <li>small <span>$20</span></li>
                        <li>Medium <span>$40</span></li>
                        <li>Large <span>$60</span></li>
                    </ul>
                    <h4><a href="#">Sichuan mala spicy flavor</a></h4>
                    <h6>spicy addicts</h6>
                    <p>The spicy base soup, especially designed for spicy addicts who cannot live without spicy. Welcome to challenge our spicy hot pot</p>
                    {{--<div class="res__btn">--}}
                        {{--<a class="food__btn" href="#">Order Now</a>--}}
                    {{--</div>--}}
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
                        <p>The TOP 3 popular kinds of </p>
                        <h2 class="title__line"> Frequently ordered dishes</h2>
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
                                <span>$18</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Pork slices</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type :Meat</p>
                                <p>Taste : soft </p>
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
                                <span>$25</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Lamb roll</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type : Meat</p>
                                <p>Taste : Soft & appetizing</p>
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
                                <span>$23</span>
                            </div>
                        </div>
                        <div class="clint__demand__inner">
                            <h4><a href="#">Beef roll</a></h4>
                            <div class="clt__delevery__time">
                                <p>Food Type : Meat</p>
                                <p>Taste : Soft & appetizing</p>
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
                                <p>One of the best hot pot restaurant in Singapore that reminds me of my childhood life</p>
                                <div class="fd__test__info">
                                    <h6>Bruce Sim</h6>
                                    <span>Food Expert</span>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                            <!-- Start Testimonial -->
                            <div class="testimonial-2">
                                <p>Best for spicy lovers. Soft lamb rolls, fresh beef rolls and pork slides. Very enjoyable !</p>
                                <div class="fd__test__info">
                                    <h6>Mike Tang</h6>
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
                        <h2>Welcome to Hot Pot Hero !</h2>
                        {{--<div id="mc_embed_signup">
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
                        </div>--}}
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
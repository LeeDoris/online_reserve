@extends('layouts.master')

@section('content')
    <div class="ht__bradcaump__area bg-image--24">
        <div class="ht__bradcaump__wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bradcaump__inner text-center brad__white">
                            <h2 class="bradcaump-title">contact us</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                <span class="breadcrumb-item active">contact us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Contact Map -->
    <div class="contact__map__area">
        <div class="contact__map__wrapper">
            <div class="contact__map__left">
                <div class="map__thumb">
                    <img src="{{ asset('images/banner/contact/1.jpg') }}" alt="images">
                </div>
            </div>
            <div class="contact__map__right">
                <div class="htc__google__map">
                    <div class="map-contacts">
                        <div id="googlemap">
                            <iframe width="100%" height="100%" src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d8127.3143288145675!2d103.68172924262994!3d1.346700194419926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0f0a99014463%3A0xb8bb0800c52d8219!2z5Y2X5rSL55CG5bel5aSn5a2m!5e0!3m2!1szh-CN!2scn!4v1519797576915" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Map -->
    <!-- Start Address -->
    <div class="food__contact">
        <div class="food__contact__wrapper d-flex flex-wrap flex-lg-nowrap">
            <!-- Start Single Contact -->
            <div class="contact">
                <div class="ct__icon">
                    <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="ct__address">
                    <p><a href="#">+065 1234-5678</a></p>
                    <p><a href="#">+065 9101-1121</a></p>
                </div>
            </div>
            <!-- End Single Contact -->
            <!-- Start Single Contact -->
            <div class="contact">
                <div class="ct__icon">
                    <i class="zmdi zmdi-home"></i>
                </div>
                <div class="ct__address">
                    <p>76 Nanyang Drive, N2.1, #02-03, Nanyang Technological University, Singapore 637331</p>
                </div>
            </div>
            <!-- End Single Contact -->
            <!-- Start Single Contact -->
            <div class="contact">
                <div class="ct__icon">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="ct__address">
                    <p><a href="#">delivery@gmail.com</a></p>
                    <p><a href="#">guoxun@gmail.com</a></p>
                </div>
            </div>
            <!-- End Single Contact -->
        </div>
    </div>
    <!-- End Address -->
    <section class="food__contact__form bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__wrap">
                        <h2>Get In Touch With HOTPOT HERO</h2>
                        @if(\Illuminate\Support\Facades\Session::has('status'))
                            <h3>{{ Session::get('status') }}</h3>
                        @endif
                        @if(count($errors)>0)
                            @if(is_object($errors))
                                @foreach($errors->all() as $error)
                                    <h3>{{ $error }}</h3>
                                @endforeach
                            @else
                                <h3>{{ $error }}</h3>
                            @endif
                        @endif
                        <div class="contact__form__inner">
                            <form action="{{ url('/contact') }}" method="post">
                                {{ csrf_field() }}
                            {{--<form id="contact-form" action="mail.php" method="post">--}}
                                <div class="single-contact-form">
                                    <div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                        <input type="text" name="name" placeholder="Your Name">
                                        <input type="email" name="email" placeholder="E-mail">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message"  placeholder="Message*"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="food__btn">submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
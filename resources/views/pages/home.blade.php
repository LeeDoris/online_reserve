@extends('layouts.master')

@section('content')
    <div class="banner">
        <div class="container">
            <div class="b_room">
                <div class="booking_room"><br />
                    <div class="reservation">
                        <div class="book-top">
                            <div class="b-search" style="padding-left: 38%">
                                <div class="boo-lef">
                                    <i class="sear"></i>
                                    <p>Search</p>
                                </div>
                            </div>
                            {{--<div class="pick">--}}
                                {{--<div class="boo-lef">--}}
                                    {{--<i class="sele"></i>--}}
                                    {{--<p>Pick</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="delv">--}}
                                {{--<div class="boo-lef">--}}
                                    {{--<i class="ca-r"></i>--}}
                                    {{--<p>Delivered</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="clearfix"> </div>
                        </div>
                        <ul>
                            <li class="span1_of_1">
                                <!----------start section_room----------->
                                <form>
                                    <input type="text" class="textbox" value="Resturant Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Resturant Name';}">
                                </form>
                            </li>
                            <li class="span1_of_1">
                                <!----------start section_room----------->
                                <div class="section_room">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">Enter City Name</option>
                                        <option value="null">popular areas</option>
                                        <option value="AX">Maroubra</option>
                                        <option value="AX">Ultimo</option>
                                    </select>
                                </div>
                            </li>
                            <li class="span1_of_3">
                                <div class="date_btn">
                                    <form action="resturants.html">
                                        <input type="submit" value="Find resturants">
                                    </form>
                                </div>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latis">
        <div class="container">
            <div class="col-md-4 latis-left">
                <h3>Maecenas ornare enim</h3>
                <img src="{{ asset('images/4.jpg') }}" class="img-responsive" alt="">
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <p>Cum sociis natodiculus mus.rhoncus egestas ac sit </p>
                    <div class="cur">
                        <div class="cur-left">
                            <div class="item_add"><span class="item_price"><a class="morebtn hvr-rectangle-in" href="#">Add to cart</a></span></div>
                        </div>
                        <div class="cur-right">
                            <div class="item_add"><span class="item_price"><h6>only $45.00</h6></span></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 latis-left">
                <h3>Dis parturient montes</h3>
                <img src="{{ asset('images/1.jpg') }}" class="img-responsive" alt="">
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <p>Cum sociis natodiculus mus.rhoncus egestas ac sit </p>
                    <div class="cur">
                        <div class="cur-left">
                            <div class="item_add"><span class="item_price"><a class="morebtn hvr-rectangle-in" href="#">Add to cart</a></span></div>
                        </div>
                        <div class="cur-right">
                            <div class="item_add"><span class="item_price"><h6>only $55.00</h6></span></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 latis-left">
                <h3>Curabitur congue blandit</h3>
                <img src="{{ asset('images/3.jpg') }}" class="img-responsive" alt="">
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <p>Cum sociis natodiculus mus.rhoncus egestas ac sit </p>
                    <div class="cur">
                        <div class="cur-left">
                            <div class="item_add"><span class="item_price"><a class="morebtn hvr-rectangle-in" href="#">Add to cart</a></span></div>
                        </div>
                        <div class="cur-right">
                            <div class="item_add"><span class="item_price"><h6>only $65.00</h6></span></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>


        </div>
    </div>
    <div class="feature">
        <div class="container">
            <div class="fle-xsel">
                <ul id="flexiselDemo3">
                    <li>

                        <img src="{{ asset('images/1p.jpg') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/2p.jpg') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/3p.png') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/4p.jpg') }}" class="img-responsive" alt="">


                    </li>
                    <li>

                        <img src="{{ asset('images/5p.jpg') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/6p.jpg') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/7p.jpg') }}" class="img-responsive" alt="">

                    </li>
                    <li>

                        <img src="{{ asset('images/8p.jpg') }}" class="img-responsive" alt="">

                    </li>

                </ul>

                <script type="text/javascript">
                    $(window).load(function() {

                        $("#flexiselDemo3").flexisel({
                            visibleItems: 8,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 2
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>
    <div class="magnust">
        <div class="container">
            <h3>Nascetur ridiculus mus</h3>
            <div class="col-md-4 magnust-top">

                <div class="magnust-left">
                    <img src="{{ asset('images/9b.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="magnust-right">
                    <h4><a href="#">Cites of the</a></h4>
                    <p> Lorem Ipsum passage, and going through the cites of the undoubtable source. Lorem sections</p>
                    <a class="see" href="#">See More</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 magnust-top">
                <div class="magnust-left">
                    <img src="{{ asset('images/8b.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="magnust-right">
                    <h4><a href="#">Lorem Ipsum</a></h4>
                    <p> Lorem Ipsum passage, and going through the cites of the undoubtable source. Lorem sections</p>
                    <a class="see" href="#">See More</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 magnust-top">
                <div class="magnust-left">
                    <img src="{{ asset('images/10b.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="magnust-right">
                    <h4><a href="#">Will uncove</a></h4>
                    <p> Lorem Ipsum passage, and going through the cites of the undoubtable source. Lorem sections</p>
                    <a class="see" href="#">See More</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
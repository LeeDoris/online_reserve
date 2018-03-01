<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo-front.png" class="img-responsive" alt=""></a>
        </div>
        <div class="header-left">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/reserve') }}">Reservation</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <div class="clearfix"></div>
                </ul>
                <!-- script-for-nav -->
                <script>
                    $("span.menu").click(function () {
                        $(".head-nav ul").slideToggle(300, function () {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script-for-nav -->
            </div>
            <div class="header-right1">
                <ul>
                    @if (Auth::guest())
                        <li><a href="{{ url('/admin/login') }}">LOGIN &nbsp;<i class="fa fa-sign-in"></i></a></li>
                        {{--<li><a href="{{ url('/register') }}">Register <i class="fa fa-btn fa-user"></i></a></li>--}}
                    @else
                        <li class="dropdown" id="nav-mark-btn" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" id="mark-info" style="padding: 0;width: 134px;min-width: 0;margin: 0;">
                                <li><a href="{{ url('/admin') }}">Dashboard  </a> </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            {{--<div class="header-right1">--}}
                {{--<div class="cart box_1">--}}
                    {{--<a href="checkout.html">--}}
                        {{--<h3><span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity"--}}
                                                                                 {{--class="simpleCart_quantity"> 0 </span>--}}
                            {{--items)<img src="images/bag.png" alt=""></h3>--}}
                    {{--</a>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
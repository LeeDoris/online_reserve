<div class="cartbox-wrap">
    <div class="cartbox text-right">
        <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
        <div class="cartbox__inner text-left">
            @if (Auth::guest())
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{ url('/admin/login') }}">LOGIN</a>
                    {{--<a class="food__btn" href="#"><span>Checkout</span></a>--}}
                </div>
            @else
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{ url('/admin') }}">Dashboard</a>
                    {{--<a class="food__btn" href="#"><span>Checkout</span></a>--}}
                </div>
                <div class="cartbox__items" ng-controller="usersController">
                    <!-- Cartbox Single Item -->
                    {{--<div class="panel panel-primary breathe" ng-controller="usersController">--}}
                        <div class="panel-heading">
                            <h3 class="panel-title">Your active reservations</h3>
                        </div>
                        {{--<div class="panel-body">--}}
                            {{--<ul class="list-group">--}}
                                {{--<li class="list-group-item"--}}
                                    {{--ng-repeat="reservation in userReservations | orderBy:'reservation_start'"--}}
                                    {{--ng-show="reservation.active==1">--}}
                                    {{--<!-- table number instead table_id-->--}}
                                    {{--<div>Table: @{{reservation.table_number}}</div>--}}
                                    {{--<div>Time: @{{reservation.reservation_start}}</div>--}}
                                    {{--<div>--}}
                                        {{--<button class="btn btn-sm btn-danger"--}}
                                                {{--ng-click="deleteReservation(reservation.id, $index)">Cancel--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="cartbox__item" ng-repeat="reservation in userReservations | orderBy:'reservation_start'" ng-show="reservation.active==1">
                        <div class="cartbox__item__thumb">
                            <a href="#">
                                <img src="@{{ reservation.image_url }}" alt="small thumbnail">
                            </a>
                        </div>
                        <div class="cartbox__item__content">
                            <h5>Table: @{{reservation.table_number}}</h5>
                            <p>Time: <span>@{{reservation.reservation_start}}</span></p>
                            {{--<span class="price">$15</span>--}}
                        </div>
                        <button class="cartbox__item__remove" ng-click="deleteReservation(reservation.id, $index)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div><!-- //Cartbox Single Item -->
                </div>
                {{--<div class="cartbox__total">--}}
                    {{--<ul>--}}
                        {{--<li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>--}}
                        {{--<li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>--}}
                        {{--<li class="grandtotal">Total<span class="price">$75</span></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            @endif
        </div>
    </div>
</div>
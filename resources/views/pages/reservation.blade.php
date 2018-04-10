@extends('layouts.master')

@section('content')
    <div class="ht__bradcaump__area bg-image--20">
        <div class="ht__bradcaump__wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bradcaump__inner text-center brad__white">
                            <h2 class="bradcaump-title">Reservation</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                <span class="breadcrumb-item active">Reservation</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="food__about__us__area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title title__style--2 service__align--center">
                        <h2 class="title__line">Reservations</h2>
                        @if(Auth::guest())
                            <p class="mutted">You must be logged in to make reservation</p>
                        @else
                            <p class="mutted">Select date and time then click search to see what's available</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt--10">
                <div class="col-lg-12 col-sm-12 col-md-12" ng-controller="tableController">
                    <form class="row search-box form-inline"
                          ng-submit="searchReservations(dt.getDate(),dt.getMonth()+1,dt.getFullYear(),time)">
                        <div class="col-md-3">
                            <p class="input-group">
                                <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="dt"
                                       is-open="opened" min-date="minDate" max-date="'2020-06-22'"
                                       datepicker-options="dateOptions" date-disabled="disabled(date, mode)"
                                       ng-required="true" close-text="Close"/>
                                <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i
                            class="fa fa-calendar"></i></button>
              </span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="input-group">
                                <select class="form-control inline" ng-model="time">
                                    <option ng-repeat="hour in hours" ng-selected="hour==currentTime">@{{hour}}</option>
                                </select>
                                <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click=""><i class="fa fa-clock-o"></i></button>
              </span>
                            </p>
                            <i class="fa fa-spinner fa-spin fa-2x" ng-hide="hideSpinner"></i>
                        </div>
                        <div class="">
                            <input type="submit" class="btn btn-success" value="Search"/>
                        </div>
                    </form>

                    <div>
                        <h4 style="margin-top: 40px" ng-show="reservedTables.length==20">@{{ tips }}</h4>
                    </div>

                    <div class="tables-container row">
                        <div class="col-md-2 restaurant-table " ng-repeat="table in tables">
                            <h3 style="cursor:pointer"
                                tooltip-html-unsafe='<p>Position:@{{table.position}}</p><img style="display:block;" width="320" height="225" src="@{{table.image_url}}"/><p>Description: @{{table.description}}</p>'
                                tooltip-placement="right" tooltip-append-to-body="false">Table
                                No. @{{table.number}}</h3>
                            <p>Number of seats: @{{table.seats}}</p>
                            <button class="btn btn-sm btn-danger" ng-show="reservedTables.indexOf(table.id)!=-1"
                                    style="cursor:auto;">Reserved
                            </button>
                            <a class="btn btn-sm btn-success" style="color: white" ng-show="reservedTables.indexOf(table.id)==-1"
                               ng-click="makeReservation(table.id, table.number, dt.getDate(), dt.getMonth()+1, dt.getFullYear(), time)">Make
                                reservation</a>
                        </div>
                    </div><!-- end tables container -->
                </div><!--end col-md-10-->
                {{--<div class="col-md-3">--}}
                    {{--@if(Auth::check())--}}
                        {{--<div class="panel panel-primary breathe" ng-controller="usersController">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h3 class="panel-title">Your active reservations</h3>--}}
                            {{--</div>--}}
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
                    {{--@else--}}

                    {{--@endif--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <section class="food__team__area team--2 bg--white section-padding--lg bg-image--21">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section__title title__style--2 service__align--center section__bg__black">
                        <h2 class="title__line">Floor Plan of Hotpot Hero</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <!-- Start Single Team -->
                <div class="col-lg-12 col-md-12">
                    <div class="team text-center foo">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="{{ asset('images/bg/kitchen.jpg') }}" alt="team images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="food__acconrdion__area bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section__title title__style--2 service__align--center">
                        <h2 class="title__line">Frequently Ask Question</h2>
                        <p>with answers </p>
                    </div>
                </div>
            </div>
            <div class="row mt--80 pb--60">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="accordion" class="food_accordion" role="tablist">
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingOne">
                                <h5>
                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true"
                                       aria-controls="collapseOne"><span>1.</span> What is the table size ?</a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">small table: 0.6m x 0.6m; middle table: diameter = 1m ; large table: diameter = 1.8m
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingTwo">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                        <span>2.</span> At which tables can see the outside views ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                 data-parent="#accordion">
                                <div class="card-body"> Table 1 - 12 (can refer to the floor plan) since they are near windows
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingThree">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button"
                                       aria-expanded="false" aria-controls="collapseThree">
                                        <span>3.</span> Can I book all tables at a particular day?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                 data-parent="#accordion">
                                <div class="card-body">Cannot. A customer can book 2 tables at most per day. For customers who
                                    always book table but never appear, we will prohibit their account to book table any more
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOTPOT HERO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toaster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Modernizer js -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body ng-app="restaurantApp">
<toaster-container></toaster-container>
@include('partials.navigation')
@yield('content')
@include('partials.footer')
@include('partials.cart')

<script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/active.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>--}}
<script src="{{ asset('js/angular.min.js') }}"></script>
<script src="{{ asset('js/angular-route.min.js') }}"></script>
<script src="{{ asset('js/angular-animate.min.js') }}" ></script>

<script src="{{ asset('js/ui-bootstrap-tpls-0.11.0.min.js') }}" ></script>
<script src="{{ asset('js/toaster.js') }}" ></script>
<script src="{{ asset('js/angular-file-upload.min.js') }}" ></script>
<script src="{{ asset('reservation/app.js') }}"></script>
<script src="{{ asset('reservation/services/tableService.js') }}"></script>
<script src="{{ asset('reservation/services/reservationService.js') }}"></script>
<script src="{{ asset('reservation/services/userService.js') }}"></script>
<script src="{{ asset('reservation/controllers/tableController.js') }}"></script>
<script src="{{ asset('reservation/controllers/usersController.js') }}"></script>
{{--<script src="{{ asset('reservation/controllers/reservationsController.js') }}"></script>--}}
<script src="{{ asset('reservation/directives/disableAnimation.js') }}"></script>
</body>
</html>
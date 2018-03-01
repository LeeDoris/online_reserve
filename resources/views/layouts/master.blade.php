<!DOCTYPE HTML>
<html>
<head>
    <title>HOTPOT HERO</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
{{--    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />--}}
    <script src="{{ asset('js/simpleCart.min.js') }}"> </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>
<body ng-app="restaurantApp">
@include('partials.navigation')
@yield('content')
@include('partials.footer')

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>--}}
{{--<script src="https://code.angularjs.org/1.2.16/angular-route.min.js"></script>--}}
{{--<script src="https://code.angularjs.org/1.2.16/angular-animate.min.js" ></script>--}}
<script src="{{ asset('js/angular.min.js') }}"></script>
<script src="{{ asset('js/angular-route.min.js') }}"></script>
<script src="{{ asset('js/angular-animate.min.js') }}" ></script>

<script src="{{ asset('js/ui-bootstrap-tpls-0.11.0.min.js') }}" ></script>
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/0.4.4/toaster.js"></script>--}}
<script src="{{ asset('js/angular-file-upload.min.js') }}" ></script>
<script src="{{ asset('reservation/app.js') }}"></script>
<script src="{{ asset('reservation/services/tableService.js') }}"></script>
<script src="{{ asset('reservation/services/reservationService.js') }}"></script>
<script src="{{ asset('reservation/services/userService.js') }}"></script>
<script src="{{ asset('reservation/controllers/tableController.js') }}"></script>
<script src="{{ asset('reservation/controllers/usersController.js') }}"></script>
<script src="{{ asset('reservation/controllers/reservationsController.js') }}"></script>
<script src="{{ asset('reservation/directives/disableAnimation.js') }}"></script>
</body>
</html>
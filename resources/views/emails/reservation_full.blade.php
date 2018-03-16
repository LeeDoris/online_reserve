{{--@extends('beautymail::templates.sunny')--}}

{{--@section('content')--}}

    {{--@include ('beautymail::templates.sunny.heading' , [--}}
        {{--'heading' => 'Dear Customer',--}}
        {{--'level' => 'h1',--}}
    {{--])--}}

    {{--@include('beautymail::templates.sunny.contentStart')--}}

    {{--<p>{{ $setting->value }} {{ $wait_time }} minute. in {{ $reservation->reservation_start }}</p>--}}
    {{--<p>Sorry to tell you.You need wait for about in</p>--}}
    {{--@include('beautymail::templates.sunny.contentEnd')--}}

    {{--@include('beautymail::templates.sunny.button', [--}}
        	{{--'title' => 'Click for Address',--}}
        	{{--'link' => 'http://google.com'--}}
    {{--])--}}

{{--@stop--}}

@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>Dear Customer</strong></h4>
    <p>{{ $setting }} {{ $wait_time }} minute. in {{ $reservation->reservation_start }}</p>

    @include('beautymail::templates.widgets.articleEnd')

@stop
@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>Dear Customer</strong></h4>
    <p>{{ $setting->value }} {{ $reservation->reservation_start }}.</p>

    @include('beautymail::templates.widgets.articleEnd')

@stop
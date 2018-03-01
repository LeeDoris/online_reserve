@extends('layouts.master')

@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-head">
                <h3>CONTACT US</h3>
            </div>
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
            <div class="contact-grid">
                <form action="{{ url('/contact') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" placeholder="Name" required/>
                    <input type="text" name="email" placeholder="E-mail" required/>
                    <input type="text" name="phone" placeholder="Phone" required/>
                    <input type="text" name="cityname" placeholder="City Name" required/>
                    <textarea placeholder="Message" name="message"></textarea>
                    <input type="submit" value="SEND"/>
                </form>
            </div>
            <div class="contact-details">
                <div class="col-md-6 contact-map">
                    <h4>FIND US HERE</h4>
                    <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d8127.3143288145675!2d103.68172924262994!3d1.346700194419926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0f0a99014463%3A0xb8bb0800c52d8219!2z5Y2X5rSL55CG5bel5aSn5a2m!5e0!3m2!1szh-CN!2scn!4v1519797576915" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="col-md-6 company_address">
                    <h4>ADDRESS</h4>
                    <p>NTU,</p>
                    <p>Singapore</p>
                    <p>Phone:(00) 1111 2222</p>
                    <p>Email: <a href="mailto:info@example.com">info@test.com</a></p>
                    <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
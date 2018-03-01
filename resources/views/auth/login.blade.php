@extends('layouts.master')

@section('content')
    <div class="login-page">
        <div class="container">
            <div class="account_grid">
                <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                    <h3>NEW CUSTOMERS</h3>
                    <p>By creating an account with our resterant, you will be able to reservation online indirectly.</p>
                    <a class="acount-btn" href="{{ url('/register') }}">Create an Account</a>
                </div>
                <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                    <h3>REGISTERED CUSTOMERS</h3>
                    <p>If you have an account with us, please log in.</p>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input id="email" type="text" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div>
                            <span>Password<label>*</label></span>
                            <input id="password" type="password" name="password" required>
                        </div>
                        <a class="forgot" href="#">Forgot Your Password?</a>
                        <input type="submit" value="Login">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

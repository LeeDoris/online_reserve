@extends('layouts.master')

@section('content')
<div class="main-1">
    <div class="container">
        <div class="register">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="register-top-grid">
                    <h3>PERSONAL INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Name<label>*</label></span>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>UserName<label>*</label></span>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                    </div>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Email Address<label>*</label></span>
                        <input type="text" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Telephone<label>*</label></span>
                        <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" required autofocus>
                    </div>
                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                    </a>
                </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Password<label>*</label></span>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Confirm Password<label>*</label></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="register-but">
                    <input type="submit" value="submit">
                </div>
            </form>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection

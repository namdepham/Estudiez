@extends('user.layouts.master')
@section('title', 'Login')
@section('main-content')
    <section class="main-content">
        <!-- Login -->
        <link href="{{ asset('asset_home/css/main.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/asset_home/css/util.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('asset_home/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('asset_home/js/main.js')}}"></script>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form  method="POST" action="{{ route('user.login') }}" class="login100-form validate-form" >
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Login to continue
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                        </div>


                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>

                            <div>
                                <a href="#" class="txt1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-46 p-b-20">
                            <a class="txt2" style="font-size: 18px;" href="{{ route('user.register') }}">
                                or sign up now
                            </a>
                        </div>

                        <div class="login100-form-social flex-c-m">
                            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                            </a>

                            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                    <div class="login100-more" style="background-image: url({{url('asset_home/images/7.jpg')}});"></div>
                </div>
            </div>
        </div>
    </section>

@endsection



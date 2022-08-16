@extends('user.layouts.master')
@section('title', 'Register')
@section('main-content')
    <section class="main-content">
        <!-- Register -->
        <link href="{{ asset('asset_home/css/main.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/asset_home/css/util.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('asset_home/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('asset_home/js/main.js')}}"></script>

        <div class="limiter">
                <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" enctype="multipart/form-data" action="{{ route('user.register') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <span class="login100-form-title p-b-43">
                            Sign Up Now
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Enter email</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="name">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Enter name</span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="file" name="avatar">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Avatar</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <select class="input100" name="type">
                                <option value="{{ \App\Constants\UserType::PARENT }}">Parent</option>
                                <option value="{{ \App\Constants\UserType::STUDENT }}">Student</option>
                            </select>
                            <span class="focus-input100"></span>
                            <span class="label-input100">Select type</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Enter password</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="confirmpassword">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Confirm password</span>
                        </div>
                        <div class="flex-sb-m w-full p-t-3 p-b-32"></div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Sign up
                            </button>
                        </div>

                        <div class="text-center p-t-46 p-b-20">
                            <a class="txt2" href="{{ route('login') }}">
                                Ready An Account? Login now
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
                    <div class="login100-more" style="background-image: url({{url('asset_home/images/9.jpg')}})"></div>
                </div>
            </div>
        </div>
    </section>



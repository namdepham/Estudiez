<!DOCTYPE html>
<html dir="ltr" lang="en"
      class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths no-mobile nivo-lightbox-notouch"
      style="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./logo.ico">
    <meta name="description" content="StudyPro - Education &amp; Courses HTML5 Template">
    <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5">
    <meta name="author" content="ThemeMascot">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- Stylesheet -->
    <link href="{{ asset('asset_home/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_home/css/jquery-ui.min.css') }})" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_home/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_home/css/css-plugin-collections.css') }}" rel="stylesheet">
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('asset_home/css/menuzord-megamenu.css') }}" rel="stylesheet">
    <link id="menuzord-menu-skins" href="{{ asset('asset_home/css/menuzord-boxed.css') }}" rel="stylesheet">
    <!-- CSS | Main style file -->
    <link href="{{ asset('asset_home/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->

    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('asset_home/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('asset_home/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('asset_home/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_home/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_home/css/navigation.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->
    <link href="{{ asset('asset_home/css/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <!-- mystyle -->
    <script src="https://kit.fontawesome.com/954a46f679.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- Header -->
    <header id="header" class="header modern-header modern-header-theme-colored">
        <div class="header-middle p-0 bg-light xs-text-center">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget sm-text-center">
                            <!-- <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i> -->
                            <a href="" class="font-12 text-gray text-uppercase">Mail Us Today</a>
                            <h5 class="font-13 text-black m-0"> aptechvietnam@edu.vn </h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-6">
                        <div class="widget text-center">
                            <a class="" href="#"><img src="{{ asset('asset_home/images/logo-wide.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget sm-text-center" style="text-align: right;">
                            <!-- <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i> -->
                            <a href=""
                               class="font-12 text-gray text-uppercase">{{optional (Auth::guard()->user())->name}}</a>
                            @if(Auth::check())
                                <a href="{{ route('user.logout') }}" class="font-12 text-gray text-uppercase">| Log
                                    out </a>
                            @endif
                            @if(! Auth::check())
                                <a href="{{ route('login') }}" class="font-12 text-gray text-uppercase">Log in</a>
                            @endif
                            <h5 class="font-13 text-black m-0"> +(012) 345 6789</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbascrolltofixed">
                <div class="container">
                    <nav id="menuzord" class="menuzord green menuzord-responsive">
                        <a href="javascript:void(0)" class="showhide"
                           style="display: none;">vcl<em></em><em></em><em></em></a>
                        <ul class="menuzord-menu menuzord-indented scrollable" style="max-height: 400px;">

                            <li class="active"><a href="{{ route('user.home') }}">Home</a>
                            </li>
                            <li><a href="">About us</a>
                                <ul class="dropdown" style="right: auto; display: none;">
                                </ul>
                            </li>
                            @if( Auth::check() && Auth::guard()->user()->type == \App\Constants\UserType::STUDENT)
                                <li><a href="">Academic Process<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown" style="right: auto; display: none;">
                                        <li><a href="{{ route('view.score', Auth::guard()->user()->id) }}">View
                                                Score</a></li>
                                        <li><a href="{{ route('view.resource') }}">View Resource Material</a></li>
                                        <li><a href="{{ route('view.revision') }}">View Revision Class</a></li>
                                    </ul>
                                </li>
                            @elseif( Auth::check() && Auth::guard()->user()->type == \App\Constants\UserType::STUDENT)
                                <li>
                                    <a href=" {{ route('search.children')}}">
                                        Search children
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('view.gallery') }}>Gallery</a>
                            </li>
                            <ul class="pull-right sm-pull-nonelist-inline nav-side-icon-list">
                                <li>
                                    <a href="" id="fullscreen-search-btn"><i
                                            class="search-icon text-theme-colored2 fa fa-search"></i></a>
                                    <div id="fullscreen-search-form">
                                        <button type="button" class="close">×</button>
                                        <form>
                                            <input type="search" value="" placeholder="Search keywords(s)">
                                            <button type="submit"><i class="search-icon fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- Start main-content -->
    @yield('main-content')
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#152029"
            style="background-image: url(&quot;images/footer-bg.png&quot;); background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: rgb(21, 32, 41) !important;">
        <div class="container pt-70 pb-40">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-5 mb-20" alt="" src="{{asset('asset_home/images/logo-white-footer.png')}}">
                        <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-colored2 mr-5"></i> <a
                                    class="text-gray" href="">123-456-789</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a
                                    class="text-gray" href="">contact@yourdomain.com</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-colored2 mr-5"></i> <a
                                    class="text-gray" href="">www.yourdomain.com</a></li>
                        </ul>
                        <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-vk"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
                        <ul class="angle-double-right list-border">
                            <li><a href="">Home Page</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Our Mission</a></li>
                            <li><a href="">Terms and Conditions</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href=""><img src="" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="">PHP Learning</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href=""><img src="" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="">Web Development</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href=""><img src="" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="">Spoken English</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
                        <div class="opening-hours">
                            <ul class="list-border">
                                <li class="clearfix"><span> Mon - Tues :  </span>
                                    <div class="value pull-right"> 6.00 am - 10.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Wednes - Thurs :</span>
                                    <div class="value pull-right"> 8.00 am - 6.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Fri : </span>
                                    <div class="value pull-right"> 3.00 pm - 8.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Sun : </span>
                                    <div class="value pull-right text-white closed"> Closed</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-bg-color="#2b2d3b" style="background: rgb(43, 45, 59) !important;">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-12 text-black-777 m-0 sm-text-center">Stolen ©2022 Tuan :) .All Rights
                            Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="" style="display: none;"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->

<!-- external javascripts -->
<!-- <script src="./js/jquery-2.2.4.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>
<script src="./js/bootstrap.min.js"></script> -->
<!-- JS | jquery plugin collection for this theme -->
<!-- <script src="./js/jquery-plugin-collection.js"></script> -->
<!-- JS | Custom script for all pages -->
<!-- <script src="./js/custom.js"></script>
<script src="./js/extra.js"></script> -->

<!-- Revolution Slider 5.x SCRIPTS -->
<!-- <script src="./js/jquery.themepunch.tools.min.js"></script>
<script src="./js/jquery.themepunch.revolution.min.js"></script>
<script src="./js/extra-rev-slider-new.js"></script> -->

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset_home/js/revolution.extension.video.min.js')}}"></script>


<!-- Modal: Bootstrap Parent Modal Starts -->
<div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<!-- Modal: Bootstrap Parent Modal Ends -->
<!-- Color Switcher Starts | Only for demo purpose and not included in main file -->

<!-- switcher html -->
<link href="{{asset('asset_home/css/color-switcher.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('asset_home/js/color-switcher.js')}}"></script>


</body>
</html>

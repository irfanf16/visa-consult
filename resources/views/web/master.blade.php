<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMES</title>

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/royal-preload.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('web/revolution/css/settings.css') }}">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" href="{{ asset('web/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('web/revolution/css/navigation.css') }}">

    <link rel="shortcut icon" href="{{asset('web/images/logo-blue.png')}}">
</head>
<body class="royal_preloader">
<div id="page" class="site">

    <header id="site-header" class="site-header mobile-header-blue header-style-1">
        <!--<div id="header_topbar" class="header-topbar clearfix">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12">-->
        <!-- social icons -->
        <!--                <ul class="social-list text-center">-->
        <!--                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>-->
        <!--                    </li>-->
        <!--                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>-->
        <!--                    </li>-->
        <!--                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>-->
        <!--                    </li>-->
        <!--                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!-- social icons close -->
        <!--                {{-- <div class="topbar-text fright"> Opening Hours : Monday to Saturday - 8am to 9pm</div> --}}-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Top bar close -->

        <!-- Main header start -->
        <div class="main-header md-hidden sm-hidden">
            <div class="main-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-wrap-table">
                                <div id="site-logo" class="site-logo col-media-left col-media-middle">
                                    <a href="#">
                                        <img class="" src="{{asset('web/images/smes-logo.png')}}" width="280" alt="Consultax">
                                        <img class="logo-scroll" src="{{asset('web/images/smes-logo.png')}}" alt="Consultax">
                                    </a>
                                </div>
                                <div class="col-media-body col-media-middle">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-mainnav">
                                <div class="search-cart-box fright">
                                    <div class="h-cart-btn fright"><a href="#"><i class="fa fa-shopping-cart"
                                                                                  aria-hidden="true"></i></a></div>

                                    <div class="toggle_search fright"><i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <div class="h-search-form-field">
                                        <form role="search" method="get" id="search-form" class="search-form"
                                              action="#">
                                            <input type="search" class="search-field" placeholder="Enter keyword..."
                                                   value="" name="s">
                                            <button type="submit" class="search-submit"><i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                @php
                                $categories=\App\Models\Category::with('apps')->where('status',true)->get()
                                @endphp
                                <div id="site-navigation" class="main-navigation fleft">
                                    <ul id="primary-menu" class="menu">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789">
                                            <a href="javascript:void(0)">Services</a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                <li class="menu-item-1791">
                                                    <a href="{{route('services',$category->slug)}}">{{$category->title}}</a>
                                                    <ul style="left:260px !important;">
                                                        @foreach($category->apps as $app)
                                                        <li class="menu-item-1791"><a href="{{route('app.detail',$app->slug)}}">{{$app->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                        <li><a href="{{route('about.us')}}">About Us</a></li>
                                        <li><a href="{{route('blogs.list')}}">Blogs</a></li>
                                        <li><a href="{{route('contact.us')}}">Contact</a></li>


                                    </ul>
                                </div>
                                <!-- #site-navigation -->
                                <a class="btn pull-right" href="#">Book a Consultantion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Main header close -->
        <div class="header_mobile">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    <a href="#"><img src="{{asset('web/images/smes-logo.png')}}" width="250" alt="Consultax"></a>
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <li class="current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
                            <a href="{{route('home')}}">HOME</a>
                        </li>

                        <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789">
                            <a href="">SERVICES</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                <li class="menu-item-1791">
                                    <a href="{{route('services',$category->slug)}}">{{$category->title}}</a>
                                    <ul class="sub-menu">
                                        @foreach($category->apps as $app)
                                        <a href="{{route('app.detail',$app->slug)}}">{{$app->title}}</a>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach

                            </ul>
                        </li>
                        <li ><a href="{{route('about.us')}}">ABOUT US</a>

                        </li>
                        <li><a href="{{route('blogs.list')}}">BLOGS</a>

                        </li>
                        <li><a href="{{route('contact.us')}}">CONTACT</a></li>

                        <a class="btn btn-large" href="#">Book a Consultantion</a>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- #site-header -->


    @yield('content')

    <footer id="site-footer" class="site-footer bg-second">
        <div class="main-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <h4 class="widget-title">About Us</h4>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>SMES Consultants is an Australian based organisation located in Melbourne. All our
                                    consultants are professionals striving to achieve the best outcomes for our clients.
                                    We are bound to follow the Australian migration laws keeping abreast with the
                                    dynamic changes that occur in the Migration Act 1958 and Regulations 1994.</p>

                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-2 col-sm-6">
                        <section id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
                            <h4 class="widget-title">Services</h4>
                            <div class="textwidget custom-html-widget">
                                <ul class="padd-left">
{{--                                    <li class="menu-item-1791"><a href="{{route('student-visa')}}">Student visa</a></li>--}}
{{--                                    <li class="menu-item-1758"><a href="{{route('visitor-visa')}}">Visitor Visas</a></li>--}}
{{--                                    <li class="menu-item-1790"><a href="{{route('business-visa')}}">Business Visas</a></li>--}}
{{--                                    <li class="menu-item-1760"><a href="{{route('career-visa')}}">Career Visas</a></li>--}}
{{--                                    <li class="menu-item-1761"><a href="{{route('work-visa')}}">Work Visas</a></li>--}}
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-3 col-sm-6">
                        <section id="custom_html-3" class="widget_text widget widget_custom_html padding-left">
                            <h4 class="widget-title">Company</h4>
                            <div class="textwidget custom-html-widget">
                                <ul class="padding-left">

                                    <li><a href="{{route('about.us')}}">About</a></li>
                                    <li><a href="{{route('blogs.list')}}">Blogs</a></li>
                                    <li><a href="{{route('about.us')}}">Contact</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!-- end col-lg-3 -->

                    <div class="col-md-4 col-sm-6">
                        <section id="mc4wp_form_widget-1" class="widget widget_mc4wp_form_widget">
                            <h4 class="widget-title">Contact</h4>
                            <!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                            <!-- contact info -->
                            <ul class="info-list info_on_right_side fright">
                                <li>
                                    <span>Address: <strong class="font-size18">Level 3, 480 collins street, melbourne CBD, VIC 3000, Australia.</strong></span>
                                </li>
                                <li>
                                    <span>Mobile: <strong class="font-size18">0406 710 999</strong></span>
                                </li>
                            </ul>
                            <!-- contact info close -->
                            <!-- / Mailchimp for WordPress Plugin -->
                        </section>
                    </div>
                    <!-- end col-lg-3 -->

                </div>
            </div>
        </div>
        <!-- .main-footer -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            © 2022 SMES <a target="_blank" href="http://themeforest.net/user/ThemeModern/portfolio">Design
                                and develop by ARZ SOFTTECH SOLUTIONS</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav text-right mobile-center">
                            <ul id="footer-menu" class="none-style">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Code of Conduct</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .copyright-footer -->
        <a id="back-to-top" href="#" class="show"></a>
    </footer>
    <!-- #site-footer -->
</div>

<script type='text/javascript' src='{{asset('web/js/jquery.min.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/countto.min.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/jquery.isotope.min.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/royal_preloader.min.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/slick.min.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/scripts.js')}}'></script>
<script type='text/javascript' src='{{asset('web/js/header-footer.js')}}'></script>

<script type="text/javascript" src="{{asset('web/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
<!-- RS5.0 Extensions Files -->
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('web/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            delay: 7500,
            navigation: {
                arrows: {enable: true}
            },
            spinner: "off",
            gridwidth: 1170,
            gridheight: 700,
            disableProgressBar: "on",
            responsiveLevels: [1920, 1229, 991, 480], gridwidth: [1170, 970, 750, 450], gridheight: [700, 700, 700, 700]
        });
    });
</script>
</body>
</html>

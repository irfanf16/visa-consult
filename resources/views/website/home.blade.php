@extends('website.inc.master')
@section('content')

    @section('title','Home')
    <!-- Nav Bar End -->

    <!-- Hero section start -->
    <section class="hero-section d-flex align-items-center py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-4 col-md-5">
                    <div class="hero_text_algin py-2">
                        <h3>We make digital solutions for businesses</h3>
                        <p>
                            Are you looking to transform your business with a digital
                            solution for an exponential growth?
                        </p>
                        <button>Let’s Discuss</button>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="hero_img_side">
                        <img src="{{asset('website/img/herobg1.png')}}" class="w-100"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->
    <!-- Slider section start -->
    <section class="slider-section d-flex align-items-center py-5">
        <div class="container">
            <div class="row text-center py-1">
                <div class="col-12">
                    <h6>Our Application</h6>
                    <h2>THE <span>[Application]</span> WE’RE OFFERING</h2>
                </div>
            </div>
            <div class="row py-4 justify-content-center">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-5 col-6 mt-3">
                        <a href="{{route('apps',$category->slug)}}">
                            <div class="storak_apps-card text-center">
                                <img src="{{asset('storage/categories/'.$category->image)}}" class="w-100"/>
                                <h3>{{$category->title}}</h3>
                                <p>
                                    {{$category->seo_description}}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Slider section end -->
    <!-- Section case study Start -->
    <section class="section_case_study py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="case_study_card text-center">
                                <h3>+12K</h3>
                                <p>Our Active Member</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="case_study_card text-center">
                                <h3>+1.5K</h3>
                                <p>Our Total Project</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="case_study_card text-center">
                                <h3>+14</h3>
                                <p>Our Winning Award</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="case_study_card text-center">
                                <h3>+50</h3>
                                <p>Our Team Member</p>
                            </div>
                        </div>
                    </div>
                    <hr class="caseStudy_hr"/>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h6>Our Application</h6>
                    <h2>THE <span>[Application]</span> WE’RE OFFERING</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Section case study End -->
    <!-- Section development type start -->
    <section class="development_type py-5">
        <div class="container">
            <div class="row">
                @foreach($apps as $app)
                    <div class="col-lg-2 col-md-3 col-6 mt-2">
                        <div class="development_card">
                            <img
                                src="{{asset('storage/apps/lg/'.$app->splash_screen)}}"
                                alt="card-img"
                                class="w-100 mb-1"
                            />
                            <div class="development_card_body py-2 px-1">
                                <span>{{$app->title}}</span>
                                <p class="mb-0">{{$app->short_description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Section development type endv -->
    <!-- Section about us start -->
    <section class="about_us_section py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-10">
                    <h6>Please Get To Know Us</h6>
                    <h2>We Are <span>[Trusted]</span> By First & Best In The World.</h2>
                    <p class="green_p">
                        Pnteger vitae pretium nunc. Aliquam rutrum lectus vel est
                        pulvinar, in scelerisque purus faucibus fusce varius lacinia.
                    </p>
                    <p>
                        Phasellus dignissim arcu sit amet augue mattis, eget rutrum ex
                        finibus. Morbi blandit luctus nisi, id ornare sem blandit sed. In
                        sed luctus dolor. Integer vitae pretium nunc. Aliquam rutrum
                        lectus vel est pulvinar in scelerisque purus.
                    </p>
                </div>
                <div class="col-lg-7 col-10">
                    <div class="about-imgs">
                        <div class="about-1 text-end">
                            <img src="{{asset('website/img/unsplash.png')}}"/>
                        </div>
                        <div class="about-2">
                            <img src="{{asset('website/img/unsplash1.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section about us  End-->
    <!-- Our team section start -->
    {{--    <section class="our_team_section mb-5">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12 text-center">--}}
    {{--                    <h6>Working Member</h6>--}}
    {{--                    <h2>Expart <span>[Team]</span> Member</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-10 mt-3">--}}
    {{--                    <div class="owl-carousel owl-theme">--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="teamCard text-center">--}}
    {{--                                <div class="teamCard_img">--}}
    {{--                                    <img src="{{asset('website/img/profile15.png')}}" class="w-100" />--}}
    {{--                                </div>--}}
    {{--                                <div class="TeamCard_body">--}}
    {{--                                    <p class="title mb-0">Bixos Founder</p>--}}
    {{--                                    <h5>William ames Benjamin</h5>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="teamCard text-center">--}}
    {{--                                <div class="teamCard_img">--}}
    {{--                                    <img src="{{asset('website/img/profile13.png')}}" class="w-100" />--}}
    {{--                                </div>--}}
    {{--                                <div class="TeamCard_body">--}}
    {{--                                    <p class="title mb-0">Bixos Founder</p>--}}
    {{--                                    <h5>Liam Olivia Emma</h5>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="teamCard text-center">--}}
    {{--                                <div class="teamCard_img">--}}
    {{--                                    <img src="{{asset('website/img/profile12.png')}}" class="w-100" />--}}
    {{--                                </div>--}}
    {{--                                <div class="TeamCard_body">--}}
    {{--                                    <p class="title mb-0">Bixos Manager</p>--}}
    {{--                                    <h5>Noah Oliver Elijah</h5>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="teamCard text-center">--}}
    {{--                                <div class="teamCard_img">--}}
    {{--                                    <img src="{{asset('website/img/profile14.png')}}" class="w-100" />--}}
    {{--                                </div>--}}
    {{--                                <div class="TeamCard_body">--}}
    {{--                                    <p class="title mb-0">Bixos Founder</p>--}}
    {{--                                    <h5>William ames Benjamin</h5>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="item">--}}
    {{--                            <div class="teamCard text-center">--}}
    {{--                                <div class="teamCard_img">--}}
    {{--                                    <img src="{{asset('website/img/profile12.png')}}" class="w-100" />--}}
    {{--                                </div>--}}
    {{--                                <div class="TeamCard_body">--}}
    {{--                                    <p class="title mb-0">Bixos Founder</p>--}}
    {{--                                    <h5>William ames Benjamin</h5>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- Our team section end -->
    <!-- Section 2 End -->
@endsection

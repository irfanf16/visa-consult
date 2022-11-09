@extends('web.master')
@section('content')

<style>
    .service-box {
        background-color: #253b90;
        color: white;
    }
</style>

<div id="content" class="site-content">
    <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
        <div id="revolution-slider">
            <ul>
               @foreach($banners as $banner)

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{ asset('/storage/banners/'. $banner->image) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
{{--                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','380','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">--}}
{{--                         <img class="img-responsive md-hidden sm-hidden xs-hidden" src="https://via.placeholder.com/505x465/000000" alt="Image"> --}}
{{--                    </div>--}}
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>{{$banner->title}}</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="{{route('contact')}}">GET QUOTE</a>
                    </div>
                </li>
                @endforeach


            </ul>
        </div>
    </section>

    <section class="wpb_row row-fluid top-70 row-has-fill relative bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-medal ion-ios-medal ion-logo-medal ion-ios-medal"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Quality Services</h4>
                                    <p>Conubia ut aliquam cub gravida sed morbi accumsa.</p>
                                </div>
                            </div>

                            <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-bulb ion-ios-bulb ion-logo-bulb ion-ios-bulb"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Valuable Ideas</h4>
                                    <p>Ante pharetra posuere blandit aliquam fusce sollicitudin.</p>
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-cash ion-ios-cash ion-logo-cash ion-ios-cash"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Budget Friendly</h4>
                                    <p>Lacinia nisl accumsa sceleris phasellus venenatis don,</p>
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-headset ion-ios-headset ion-logo-headset ion-ios-headset"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Suport 24/7</h4>
                                    <p>Etiam sollicitudin sagittis justo at ullamcorper potenti.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>OUR SERVICES</span></h6>
                                {{-- <h2 class="section-title">What we bring to you</h2> --}}
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="services.html">All services</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-umbrella ion-logo-umbrella"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Student Visas</h4>
                                    <p>This visa allows you to pursue full-time studies at an accredited educational institute in Australia. The visa validity will tally the course.</p>
                                    <a class="link-box pagelink" href="" target="_self" style="color: white;">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-cube ion-logo-cube"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Visitor Visas</h4>
                                    <p>If you would like to visit family, friends or travel for tourism. Then a short-term tourist visa may be the solution for you.</p>
                                    <a class="link-box pagelink" href="" target="_self" style="color: white;">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-podium ion-logo-podium"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Business Visas</h4>
                                    <p>This Visa is for people who have an ownership interest in a business in their home country and would like to establish.</p>
                                    <a class="link-box pagelink" href="" target="_self" style="color: white;">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-list-box ion-logo-list-box"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Career Visas</h4>
                                    <p>This is a permanent visa that allows you to live in Australia as the carer of a relative who is an Australian citizen.</p>
                                    <a class="link-box pagelink" href="" target="_self"style="color: white;">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-cash ion-logo-cash"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Family Visas</h4>
                                    <p>The General Skilled Migration (GSM) allows skilled professionals to immigrate to Australia independently.</p>
                                    <a class="link-box pagelink" href="family-visa" target="_self" style="color: white;">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden md-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-wallet ion-logo-wallet"></i>
                                <div class="content-box">
                                    <h4 style="color: white;">Work Visas</h4>
                                    <p>Employer Sponsored visas are designed for employers to address skill shortages in their business for positions.</p>
                                    <a class="link-box pagelink" href="work-visa" target="_self" style="color: white;">Read more</a> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="wpb_row row-fluid section-padd-top bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>Our Projects</span></h6>
                                <h2 class="section-title">We are the leaders</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="projects.html">All projects</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="wpb_row row-fluid section-padd-bot row-has-fill row-full-width row-no-padding bg-light">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="project-list-2">
                            <div class="project-slider-2 projects" data-show="1" data-auto="" data-dot="true">

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="https://via.placeholder.com/156x29" alt="logo"> Contract Project: May 22, 2017
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="project-detail.html">Financial Report 2019</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="https://via.placeholder.com/156x29" alt="logo"> Contract Project: November 15, 2018
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="project-detail.html">Business Growth Solutions</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="https://via.placeholder.com/156x29" alt="logo"> Contract Project: September 14, 2017
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="project-detail.html">MO Insurance Finance</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="https://via.placeholder.com/156x29" alt="logo"> Contract Project: April 24, 2016
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="project-detail.html">Enterprise Loan 2016</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="container">
                                <div class="arrows-slick">
                                    <button type="button" class="btn-left slick-arrow prev-nav"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn-right slick-arrow next-nav"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="wpb_row row-fluid section-padd bg-second row-has-fill">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-6">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <h2 class="custom_heading text-light">Request a Free<br>Call Back</h2>
                            <div class="wpb_text_column wpb_content_element  text-light">
                                <div class="wpb_wrapper">
                                    <p>Provide discussion information and we’ll get back to
                                        <br> you as soon as possible</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="" method="post" class="wpcf7-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap your-service">
                                                <select name="your-service" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                                    <option value="">Choose your visa type</option>
                                                    <option value="">Student Visa</option>
                                                    <option value="">Visistor Visa</option>
                                                    <option value="">Busisness Visa</option>
                                                    <option value="">Career Visa</option>
                                                    <option value="">Work Visa</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required="" aria-invalid="false" placeholder="Your Name">
                                            </span>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap your-phone">
                                                <input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Phone Number">
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" placeholder="Email Address">
                                            </span>
                                        </div>
                                    </div>
                                    <p>
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">

                                <h2 class="section-title">What our clients says</h2>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>

                            <div class="testi-slider" data-show="3" data-arrow="true">

                                @foreach($reviews as $review)

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{ asset('/storage/reviews/'. $review->image) }}" class="client-img" alt="">
                                            <h5>{{$review->name}}</h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>

                                            <p>{!! $review->review !!}</p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>

                            <div class="empty_space_80"><span class="empty_space_inner"></span></div>


                            <h2 class="section-title">Our Affiliations</h2>
                            <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                                @foreach($affliates as $affliate)
                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="{{ asset('/storage/affliate/'. $category->image) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- #content -->

@endsection

@extends('website.inc.master')
@section('content')
    @section('title','App Detail')


    <!-- Nav Bar End -->
    <!-- Page bg section start -->
    <section class="app-details">
        <img src="{{asset('storage/categories/'.$category->image)}}"/>
    </section>
    <!-- Page bg section end -->

    <!-- page main block start -->

    <div class="appdetails-page-block">
        <div class="container">
            <div class="page-conatiner p-md-5 p-2">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-6">
                        <div class="app_details-logo">
                            <img src="{{asset('storage/apps/lg/'.$app->splash_screen)}}" class="w-100"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="app-details-block text-center text-md-start mt-3 mt-md-0"
                        >
                            <h1 class="app_name">{{$app->title}}</h1>
                            <a href="#" class="Brand_name">Storak Group</a>
                            <div class="app-rdr py-4 d-flex text-center">
                                <div class="app-detail-card pe-md-3 pe-2">
                                    <h6
                                        class="mb-1 d-flex align-items-center justify-content-center"
                                    >
                                        4.5 <i class="fa fa-star" aria-hidden="true"></i>
                                    </h6>
                                    <p><span class="pe-2">10.6K</span>reviews</p>
                                </div>
                                <div class="app-detail-card px-md-3 px-2 px border-right">
                                    <h6
                                        class="mb-1 d-flex align-items-center justify-content-center"
                                    >
                                        5M <i class="fa fa-plus" aria-hidden="true"></i>
                                    </h6>
                                    <p><span class="pe-2"></span>Downloads</p>
                                </div>
                                <div class="app-detail-card px-md-3 px-2 border-right">
                                    <h6
                                        class="mb-1 d-flex align-items-center justify-content-center"
                                    >
                                        12&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                                    </h6>
                                    <p><span class="pe-2"></span>Rated for</p>
                                </div>
                            </div>
                            <div class="app-links d-flex gap-2">
                                <a href="{{$app->android_link}}" class="app-store">
                                    <img src="{{asset('website/img/andriod-icon.png')}}"/>
                                </a>
                                <a href="{{$app->ios_link}}" class="play-store">
                                    <img src="{{asset('website/img/apple-icon.png')}}"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="app-layout">
                            <div class="owl-carousel owl-carousel2 owl-theme">
                                @foreach($app->appImages as $images)
                                    @if($images->type=='mockup')
                                        <div class="item owl-item-img">
                                            <img src="{{asset('storage/apps/mockup/'.$images->image)}}"/>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="my-4 app-details-block">
                            <h4>About this app</h4>
                            <p>
                                {!! $app->detailed_description !!}
                            </p>
                            <div class="d-flex mt-4 app-update_version">
                                <div class="app-updateDetails">
                                    <h6>Updated on</h6>
                                    <p>{{date('d-m-Y', strtotime($app->updated_date))}}</p>
                                </div>
                                <div class="app-versionDetails">
                                    <h6>Released on</h6>
                                    <p>{{date('d-m-Y', strtotime($app->release_date))}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8 col-12">
                        <div class="developer-details">
                            <div class="accordion" id="accordionExample11">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne1"
                                            aria-expanded="true"
                                            aria-controls="collapseOne1"
                                        >
                                            Developer contact
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseOne1"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne1"
                                        data-bs-parent="#accordionExample11"
                                    >
                                        <div class="accordion-body">
                                            <div class="developer-detailCard d-flex py-2">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <a class="developer-Card-details ps-2" href="#">
                                                    <h6 class="mb-0">Email</h6>
                                                    <span>uiux@storakdigital.com</span>
                                                </a>
                                            </div>
                                            <hr/>
                                            <div class="developer-detailCard d-flex py-2">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <a class="developer-Card-details ps-2" href="#">
                                                    <h6 class="mb-0">Address</h6>
                                                    <span> 13G, Modal Town Lahore, Pakistan</span>
                                                </a>
                                            </div>
                                            <hr/>
                                            <div class="developer-detailCard d-flex py-2">
                                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                                <a class="developer-Card-details ps-2" href="{{route('app.policy',$app->slug)}}">
                                                    <h6 class="mb-0">Privacy Policy</h6>
                                                    <span>{{$app->title}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(count($category->apps) > 1)
                            <div class="more-about-apps p-2 mt-1">
                                <h3>More by Storak Group</h3>
                                <div class="more-app-list">
                                    <ul class="ps-0">
                                        @foreach($category->apps as $ap)
                                            @if($app->id != $ap->id)
                                                <li class="mt-3">
                                                    <a href="{{route('app.detail',$ap->slug)}}">
                                                        <div
                                                            class="more-appLink-card d-flex p-2 align-items-center"
                                                        >
                                                            <img src="{{asset('storage/apps/lg/'.$ap->app_icon)}}"/>
                                                            <div class="more-app-detail px-2">
                                                                <span>{{$ap->title}}</span>
                                                                <span>{{$category->title}}</span>
                                                                <span
                                                                >4.1 &nbsp;<i
                                                                        class="fa fa-star"
                                                                        aria-hidden="true"
                                                                    ></i
                                                                    ></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="app-faqs">
                            <h4 class="py-2">FAQs</h4>
                            @foreach($app->appFaqs as $faqs)
                                <div class="accordion" id="{{$faqs->id}}">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button
                                                class="accordion-button"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$faqs->id}}"
                                                aria-expanded="true"
                                                aria-controls="collapse{{$faqs->id}}"
                                            >
                                                {{$faqs->question}}
                                            </button>
                                        </h2>
                                        <div
                                            id="collapse{{$faqs->id}}"
                                            class="accordion-collapse collapse "
                                            aria-labelledby="headingOne"
                                            data-bs-parent="#{{$faqs->id}}"
                                        >
                                            <div class="accordion-body">
                                                {{$faqs->answer}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- page main block End -->
    <!-- Footer Start -->

@endsection

@extends('website.inc.master')
@section('content')

    @section('title','Apps')

    <div class="brands-bg">
        <img src="{{asset('storage/categories/'.$category->image)}}"/>
    </div>
    <!-- Page back grounf end -->
    <!-- Page section start -->
    <div class="brands-sections">
        <div class="container">
            <div class="brands-sections-container p-md-5">
                <div class="row">
                    <div class="col-12">
                        <div class="brands-title text-center">
                            <h2>{{$category->title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($category->apps as $app)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6 mb-4">
                            <div class="brand-card text-center px-2">
                                <a href="{{route('app.detail',$app->slug)}}">
                                    <h4 class="py-2">{{$app->title}}</h4>
                                    <div class="brands-img">
                                        <div class="owl-carousel owl-carousel1 owl-theme">
                                            @foreach($app->appImages as $image)
                                                @if($image->type=='intro')
                                                    <div class="item">
                                                        <img src="{{asset('storage/apps/mockup/'.$image->image)}}"
                                                             class="w-100"/>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

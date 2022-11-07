@extends('website.inc.master')
@section('content')
    @section('title','App Policies')


    <!-- Nav Bar End -->
    <!-- Page bg section start -->
    <section class="app-details">
        <img src="{{asset('storage/categories/'.$app->category->image)}}"/>
    </section>
    <!-- Page bg section end -->

    <!-- page main block start -->

    <div class="appdetails-page-block">
        <div class="container">
            <div class="page-conatiner p-md-5 p-2">
               {!! $app->policies !!}
            </div>
        </div>
    </div>
    <!-- page main block End -->
    <!-- Footer Start -->

@endsection



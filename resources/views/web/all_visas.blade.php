@extends('web.master')
@section('content')

    <div id="content" class="site-content">


        <div id="content" class="site-content">
            <div class="entry-content">
                <div class="container">
                    <div class="boxed-content">
                        <section class="wpb_row row-fluid section-padd no-bot">
                            <div class="container">
                                <div class="row">
                                    <div class="wpb_column column_container col-sm-12">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="section-head ">
                                                    {{-- <h6><span>E M P L O Y E R   S P O N S O R E D   V I S A S
                                                    </span></h6> --}}
                                                    <h5 class="section-title">{{$category->title}}
                                                    </h5>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>There are numerous types of temporary and permanent work
                                                            visas for individual {{$category->title}}.</p>

                                                    </div>
                                                </div>
                                                <div class="empty_space_45"></div>

                                                @foreach($category->apps as $app)
                                                    <div class="career-box ">
                                                        <h5>{{$app->title}}</h5>
                                                        <div class="content-box">
                                                            {!! $app->detailed_description  !!}
                                                        </div>

                                                        <div class="empty_space_45"></div>
                                                        @endforeach

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

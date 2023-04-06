@extends('web.master')
@section('content')
    <div class="entry-content">
        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <article class="post-box post type-post hentry">

                            <div class="inner-post">
                                <div class="gaps">&nbsp;</div>
                                <p><img class="alignnone size-full wp-image-49"
                                        src="{{ asset('/storage/blogs/'. $blog->image) }}" alt=""></p>
                                <div class="gaps">&nbsp;</div>
                                <h4>{{$blog->title}}</h4>
                                <p>{!! $blog->description !!}</p>

                            </div>


                </div>
                </article>


                </main>
                <!-- #main -->
            </div>


        </div>
    </div>
    </div>
@endsection

@extends('web.master')
@section('content')

    <div id="content" class="site-content">


        <div class="entry-content">
            <div class="container">
                <div class="row">


                    <div id="primary" class="content-area col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
                        <main id="main" class="site-main">

                            <article class="ot_service type-ot_service status-publish has-post-thumbnail hentry">
                                <div class="inner-post">
                                    <section class="wpb_row row-fluid">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="wpb_column column_container col-sm-12">
                                                    <div class="column-inner">
                                                        <div class="wpb_wrapper">
                                                            <img class="radius"
                                                                 src="{{ asset('storage/apps/sm/'. $app->app_icon) }}"
                                                                 alt="">
                                                            <br>
                                                            <br>

                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <h4>{{$app->title}}</h4>
                                                                    {!! $app->detailed_description !!}
                                                                </div>
                                                                <ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>

                        </main>
                        <!-- #main -->
                    </div>

                    <aside id="sidebar" class="widget-area service-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <section id="nav_menu-1" class="widget widget_nav_menu">
                            <h4 class="widget-title">Services</h4>
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    @foreach($category->apps as $apps)
                                        <li @if($apps->id== $app->id) class="current-menu-item" @endif><a href="{{route('app.detail',$apps->slug)}}">{{$apps->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>

                    </aside>

                </div>
            </div>
        </div>

    </div>

@endsection

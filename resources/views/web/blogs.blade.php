@extends('web.master')
@section('content')

    <div id="content" class="site-content">
		<section class="wpb_row row-fluid section-padd bg-light">
			<div class="container">
				<div class="row">
					<div class="wpb_column column_container col-sm-12 col-md-9">
						<div class="column-inner">
							<div class="wpb_wrapper">
								<div class="section-head ">
									<h6><span>our blog</span></h6>
									<h2 class="section-title">Our latest news</h2>
								</div>

								<div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
							</div>
						</div>
					</div>
{{--					<div class="wpb_column column_container col-sm-12 col-md-3">--}}
{{--						<div class="column-inner">--}}
{{--							<div class="wpb_wrapper">--}}
{{--								<div class="wpb_text_column wpb_content_element text-right mobile-left">--}}
{{--									<div class="wpb_wrapper">--}}
{{--										<p><a class="pagelink gray" href="blog.html">View all posts</a></p>--}}
{{--	--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
					<div class="wpb_column column_container col-sm-12">
						<div class="column-inner">
							<div class="wpb_wrapper">
								<div class="news-slider posts-grid row" data-show="3" data-auto="true">

                                    @foreach($blogs as $blog)
									<div>
										<article class="news-item content-area">
											<div class="inner-item radius-top">
												<div class="thumb-image">
													<a href="{{route('blog.detail',$blog->slug)}}">
														<img src="{{ asset('/storage/blogs/'. $blog->image) }}" alt="">
													</a>
												</div>
												<div class="inner-post radius-bottom">
													<div class="entry-meta">
														<span class="posted-on">
															<time class="entry-date">{{$blog->created_at->format('D-m-Y')}}</time>
														</span>
														<span class="posted-in">
															<a href="{{route('blog.detail',$blog->slug)}}">Consulting</a>
														</span>
													</div>
													<h4 class="entry-title">
														<a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a>
													</h4>
													<p>
                                                        {!! $blog->short_description !!}
													</p>
													<a class="post-link" href="{{route('blog.detail',$blog->slug)}}">Read more</a>
												</div>
											</div>
										</article>
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

@endsection

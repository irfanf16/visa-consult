<!-- Footer Start -->
<section class="footer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6">
                <div class="footer-about">
                    <h5 class="mb-4">About Storak Group</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Reiciendis, incidunt deleniti officiis qui eos fuga deserunt
                        culpa aliquid nesciunt quia quasi, itaque voluptate libero
                        praesentium in perferendis, adipisci dolorem iure?
                    </p>
                </div>
                <hr/>
                <div>
                    <ul class="ps-0 footer_social_list">
                        <li>
                            <a href="#"
                            ><i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fa fa-twitter" aria-hidden="true"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                            ><i class="fa fa-youtube-play" aria-hidden="true"></i
                                ></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-6">
                <div class="over-apps">
                    <h5 class="mb-4">Our Products</h5>
                    <div class="footer_product_list">
                        <div class="row">
                            @php
                                $categories=\App\Models\Category::with('apps')->where('status',1)->get();
                            @endphp
                            @foreach($categories as $category)
                                <div class="col-6">
                                    <h6 class="app_type">{{$category->title}}</h6>
                                    <ul class="ps-3">
                                        @foreach($category->apps as $app)
                                            <li><a href="{{route('app.detail',$app->slug)}}">{{$app->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-newsletter">
                    <h5 class="mb-4">About Storak Group</h5>
                    <div class="newsletter-note">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p class="mb-0">Stay up to date on the latest</p>
                    </div>
                    <form class="py-2" method="POST" action="{{route('subscribe')}}">
                        @csrf
                        <input type="email" name="email" placeholder="Please Enter Email" @error('name') style="border-color: red;" @enderror/>
                        <input type="submit" class="mt-3 news-btn"/>
                    </form>
                </div>
                <div class="footer-app-link mt-3">
                    <img src="{{asset('website/img/andriod-icon.png')}}" class="w-50"/>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="footer-links">
                    <ul class="pl-0">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Data Security Inquiries </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-links">
                    <ul class="pl-0">
                        <li>© 2022 Storak Group</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

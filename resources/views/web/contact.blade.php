@extends('web.master')
@section('content')

<section class="wpb_row row-fluid section-padd">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12 col-md-7">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="section-head ">
                            <h6><span>CONTACT FORM</span></h6>
                            {{-- <h2 class="section-title">How can we help</h2> --}}
                        </div>

                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
                        <div role="form" class="wpcf7" id="wpcf7-f1989-p967-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form method="POST" action="{{route('contact')}}" class="wpcf7-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-fname"><input type="text" name="first_name" value="{{old('first_name')}}" @error('first_name') style="border-color: red;" @enderror size="40" class="wpcf7-form-control"  placeholder="First Name"></span></div>
                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-lname"><input type="text" name="last_name" value="{{old('last_name')}}" @error('last_name') style="border-color: red;" @enderror size="40" class="wpcf7-form-control"  placeholder="Last Name"></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="contact_number" value="{{old('contact_number')}}" @error('contact_number') style="border-color: red;" @enderror size="40" class="wpcf7-form-control" placeholder="Phone Number"></span></div>
                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="{{old('email')}}" @error('email') style="border-color: red;" @enderror size="40" class="wpcf7-form-control"  placeholder="Email Address"></span></div>
                                </div>
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
                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="{{old('subject')}}" @error('subject') style="border-color: red;" @enderror size="40" class="wpcf7-form-control" placeholder="Subject"></span></div>
                                </div>
                                <div class="contact-mess"><span class="wpcf7-form-control-wrap your-message"><textarea name="message" @error('message') style="border-color: red;" @enderror cols="40" rows="10" class="wpcf7-form-control"  placeholder="Enter text">{{old('message')}}</textarea></span></div>
                                <p>
                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                </p>
                            </form>
                        </div>
                        <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-12 col-md-5">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element align_center">
                            <figure class="wpb_wrapper figure">
                                <div class="single_image-wrapper box_border_grey"><img src="{{asset('web/images/visa/contact-us.jpg')}}" class="single_image-img attachment-full" alt=""></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('website.inc.master')
@section('content')
@section('title','Contact Us')

<!-- Page Content start -->
<section class="contactPage-content py-5 mt-5 mx-auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="Contactpage-title mt-4"><h1>Contact us</h1></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-10 mt-md-5 mt-3">
                <div class="contact-card p-4">
                    <div class="contact-card-header">
                        <div class="contact-card-header-block mx-auto">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="contact-card-body text-center mt-4">
                        <h4>Email Us</h4>
                        <p class="py-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Atque aperiam esse quisquam. Atque aperiam esse quisquam.
                        </p>
                        <a href="#">
                            <button class="email-btn">Email Us</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 mt-md-5 mt-3">
                <div class="contact-card p-4">
                    <div class="contact-card-header">
                        <div class="contact-card-header-block mx-auto">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="contact-card-body text-center mt-4">
                        <h4>Let's Meet</h4>
                        <p class="py-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Atque aperiam esse quisquam.
                        </p>
                        <a href="#">
                            <button class="choose-btn">Choose Slot</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-10 mt-md-5 mt-3">
                <div class="contact-card p-4">
                    <div class="contact-card-header">
                        <div class="contact-card-header-block mx-auto">
                            <i class="fa fa-headphones" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="contact-card-body text-center mt-4">
                        <h4>Give us a call</h4>
                        <p class="py-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Atque aperiam esse quisquam. Atque aperiam esse quisquam.
                        </p>
                        <a href="#">
                            <button class="email-btn">+92-300-6467339</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Content end -->
<!-- Contact Form Start -->
<section class="contact-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="Contactform-title mt-5">
                    <h1>Have you got a query ?</h1>
                    <h1>Write us, We will get back to you asap</h1>
                    <p class="mt-3 text-center">
                        Please fill the below form and let us know about your query.
                        You'll receive a reply within 3 hours or before.
                    </p>
                </div>
            </div>
            <div class="row my-3 align-items-center">
                <div class="col-md-6 col-12">
                    <div class="contact-img w-100">
                        <img
                           class="w-100" src="{{asset('website/img/contact-us.png')}}"
                        />
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-12 my-5">
                    <form method="POST" action="{{route('contact')}}">
                        @csrf
                        <div class="mb-4 contact-item">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Your name</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="{{old('name')}}"
                                id="exampleFormControlInput1" @error('name') style="border-color: red;" @enderror
                            />
                        </div>
                        <div class="mb-4 contact-item">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Your email</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                value="{{old('email')}}"
                                id="exampleFormControlInput1" @error('email') style="border-color: red;" @enderror
                            />
                        </div>

                        <div class="mb-4 contact-item">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Contact Number</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="contact_number"
                                value="{{old('contact_number')}}"

                                id="exampleFormControlInput1" @error('contact_number') style="border-color: red;" @enderror
                            />
                        </div>
                        <div class="mb-4 contact-item">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Subject</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="subject"
                                value="{{old('subject')}}"

                                id="exampleFormControlInput1"  @error('subject') style="border-color: red;" @enderror
                            />
                        </div>
                        <div class="mb-4 contact-item">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Your Messege</label
                            >
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
                                rows="10"
                                name="message"
                                cols="40" @error('message') style="border-color: red;" @enderror
                            >{{old('message')}}</textarea>
                        </div>
                        <div class="contact-submit">
                            <button>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact from End -->



@endsection

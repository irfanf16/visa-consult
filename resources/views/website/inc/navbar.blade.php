<section class="navbar-section">
    <nav class="navbar navbar-expand-lg navbar-light p-0 mx-md-5 mx-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"
            ><img src="{{asset('assets/images/logo.svg')}}" class="headerLogo"
                /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item px-4">
                        <a
                            class="nav-link px-0 py-md-4 py-2"
                            aria-current="page"
                            href="#"
                        >About</a
                        >
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-0 py-md-4 py-2"
                        >Our Apps</a
                        >
                        @php
                            $categories=\App\Models\Category::where('status',1)->get();
                        @endphp
                        <div class="custom-dorpdown">
                            <ul class="pl-0">
                                @foreach($categories as $category)
                                    <li class="py-1">
                                        <a href="{{route('apps',$category->slug)}}"> {{$category->title}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-4">
                        <a
                            class="nav-link px-0 py-md-4 py-2"
                            aria-current="page"
                            href="#"
                        >Advertising</a
                        >
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-0 py-md-4 py-2" href="#">Careers</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link px-0 py-md-4 py-2" href="{{route('contact.us')}}">Contact</a>
                    </li>
                    <li class="px-4 d-flex align-items-center">
                        <button
                            class="header_modal"
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"
                        >
                            Let’s Talk
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- Header Modal Start-->
<div
    class="modal fade header-modal"
    id="staticBackdrop"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-head">
                    <h3>Register Your Interest</h3>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="container query_modal">
                    <form method="POST" action="{{route('contact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">*All fields are required</div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1 mt-2 custome_input">
                                    <label for="exampleFormControlInput1" class="form-label"
                                    ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                                        Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleFormControlInput1"
                                        placeholder="syed"
                                        name="name" required
                                        value="{{old('name')}}" @error('name') style="border-color: red;" @enderror
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1 mt-2 custome_input">
                                    <label for="exampleFormControlInput1" class="form-label"
                                    ><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;Email
                                    </label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="exampleFormControlInput1"
                                        placeholder="Zeeshan"
                                        name="email" required
                                        value="{{old('email')}}" @error('email') style="border-color: red;" @enderror
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1 mt-2 custome_input">
                                    <label for="exampleFormControlInput1" class="form-label"
                                    ><i class="fa fa-phone" aria-hidden="true"></i>
                                        &nbsp;Phone Number</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="exampleFormControlInput1"
                                        placeholder="123 456 768"
                                        name="contact_number"
                                        value="{{old('contact_number')}}"

                                        @error('contact_number') style="border-color: red;" @enderror
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1 mt-2 custome_input">
                                    <label for="exampleFormControlInput1" class="form-label"
                                    ><i class="fa fa-crop" aria-hidden="true"></i>
                                        &nbsp;Subject</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleFormControlInput1"
                                        placeholder="name@example.com"
                                        name="subject"
                                        value="{{old('subject')}}"
                                        @error('subject') style="border-color: red;" @enderror
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1 mt-2 custome_input">
                                    <label for="exampleFormControlInput1" class="form-label"
                                    ><i
                                            class="fa fa-exclamation-circle"
                                            aria-hidden="true"
                                        ></i>
                                        &nbsp;Detail query</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="exampleFormControlTextarea1"
                                        rows="4"
                                        cols="6"
                                        name="message" @error('message') style="border-color: red;" @enderror
                                    ></textarea>
                                </div>
                            </div>
                            <div
                                class="col-12 d-flex justify-content-between align-items-start my-3"
                            >
                                <div>
                                    <input type="checkbox"/> I’d like to hear about news and
                                    offers
                                </div>
                                <button class="quire_btn" type="submit">
                                    ENQUIRE NOW
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

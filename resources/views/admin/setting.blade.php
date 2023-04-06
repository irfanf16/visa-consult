@extends('layouts.master')
@section('title')
    Setting
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Setting
        @endslot
        @slot('li_1')
            Setting
        @endslot
        @slot('li_2')
            Setting
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">

                {{-- alert --}}
                @if (session()->get('Alert'))
                    @php
                        $session_data = session()->get('Alert');
                    @endphp
                    @if ($session_data['status'] == 200)
                        {{-- sucess --}}
                        <div class="alert alert-success alert-dismissible fade show border-0 mb-0" role="alert">
                            <strong>Success!</strong> {{ $session_data['message'] }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @else
                        {{-- failure --}}
                        <div class="alert alert-danger alert-dismissible fade show border-0 mb-0" role="alert">
                            <strong>Sorry! Something went wrong</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endif

                {{-- validation errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-0 mb-0">
                        <strong>Sorry! please fix these issues first,</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- card-header --}}
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title">Setting</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-parsley" action="{{ URL::to('/admin/setting') }}" method="POST" novalidate enctype="multipart/form-data">
                        @csrf

                         {{-- App_type_id --}}
{{--                      --}}


                        {{-- Blog_id --}}

                        {{-- email --}}
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email"
                              value="{{$setting->email ?? ''}}"  placeholder="enter email here" data-parsley-maxlength="200" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        {{-- phone --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="phone"
                                   value="{{$setting->phone ?? ''}}"    placeholder="enter phone here" data-parsley-maxlength="200" required>
                            <label for="floatingInput">Phone</label>
                        </div>
                        {{-- phone --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="address"
                                   value="{{$setting->address ?? ''}}" placeholder="enter address here" data-parsley-maxlength="200" required>
                            <label for="floatingInput">address</label>
                        </div>

                           {{--  image  --}}

                        <div class="form-floating mb-3">
                            <input type="file" name="admin_logo" class="form-control" >
                            <label for="basic-conf"> Admin logo </label>
                            <img src="{{ asset('storage/setting/'. $setting->admin_logo ?? '') }}" width="30%" alt="Category Image">

                        </div>
                        {{--  image  --}}

                        <div class="form-floating mb-3">
                            <input type="file" name="site_logo" class="form-control" >
                            <label for="basic-conf"> Site logo </label>
                            <img src="{{ asset('storage/setting/'. $setting->site_logo ?? '') }}" width="30%" alt="Category Image">

                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control basic-conf" placeholder="write Review Description" id="basic-conf"
                                      name="about_us"
                                      style="height: 100px" >{{$setting->about_us ?? ''}}</textarea>
                            <label for="basic-conf"> About Us </label>
                        </div>

                        <button type="submit" class="btn btn-success f-right">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.forms-advanced.js') }}"></script>

    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-editor.init.js') }}"></script>
@endsection

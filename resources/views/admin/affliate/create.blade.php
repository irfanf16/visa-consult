@extends('layouts.master')
@section('title')
    Affliate
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Affliate
        @endslot
        @slot('li_1')
            Affliate
        @endslot
        @slot('li_2')
            create
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6 mx-auto">
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
                            <h4 class="card-title">Create New Affliate</h4>
                            <p class="text-muted mb-0">Create</p>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ URL::to('/admin/affliate') }}" class="btn btn-soft-secondary float-right w-100"
                                title="Go back to categories listing page">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-parsley" action="{{ URL::to('/admin/affliate') }}" method="POST" novalidate enctype="multipart/form-data">
                        @csrf

                         {{-- App_type_id --}}
{{--                      --}}


                        {{-- category_id --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <label class="mb-3">Parent Category</label>--}}
{{--                            <select class="select2 form-control mb-3 custom-select" id="floatingInput" name="category_id"--}}
{{--                                style="width: 100%; height:36px;">--}}
{{--                                <option value="">Select Parent Category</option>--}}
{{--                                @foreach ($categories as $category)--}}
{{--                                    <option value="{{ $category->id }}">{{ $category->title }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

                        {{-- title --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="text" class="form-control" id="floatingInput" name="affliate"--}}
{{--                                placeholder="enter title here" data-parsley-maxlength="200" required>--}}
{{--                            <label for="floatingInput">Title</label>--}}
{{--                        </div>--}}

                           {{--  image  --}}
                           <div class="form-floating mb-3">
                            <input type="file" name="image" class="form-control">
                        </div>

                        {{-- seo_description --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="write seo_description" id="floatingTextarea1" name="seo_description"--}}
{{--                                style="height: 100px" data-parsley-maxlength="255"></textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Description (max 255)</label>--}}
{{--                        </div>--}}

                        {{-- seo_abstraction --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="seo_abstraction"--}}
{{--                                style="height: 75px" data-parsley-maxlength="100"></textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Abstraction (max 03 keywords)</label>--}}
{{--                        </div>--}}

                        {{-- seo_keywords --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="write seo_description" id="floatingTextarea1" name="seo_keywords"--}}
{{--                                style="height: 100px" data-parsley-maxlength="500"></textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Keywords (max 15 keywords)</label>--}}
{{--                        </div>--}}

                        {{-- status --}}
                        <div class="form-floating mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status">
                            </div>
                        </div>

                        {{-- featured --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <div class="form-check form-switch">--}}
{{--                                <label class="form-check-label" for="flexSwitchCheckDefault">Featured</label>--}}
{{--                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="featured">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button type="submit" class="btn btn-success f-right">
                            Create
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
@endsection

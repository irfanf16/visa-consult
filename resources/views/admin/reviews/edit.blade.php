@extends('layouts.master')
@section('title')
    Review
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Review
        @endslot
        @slot('li_1')
            Review
        @endslot
        @slot('li_2')
            edit
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
                            <h4 class="card-title">Edit This Category</h4>
                            <p class="text-muted mb-0">Update</p>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ URL::to('/admin/reviews') }}" class="btn btn-soft-secondary float-right w-100"
                                title="Go back to categories listing page">
                                Back
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form class="form-parsley" action='{{ URL::to("/admin/reviews/$category->id") }}' method="POST" enctype="multipart/form-data"
                        novalidate>
                        @csrf
                        @method('PUT')



                        {{-- title --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name"
                                placeholder="enter title here" data-parsley-maxlength="200" value="{{ $category->name }}"
                                required>
                            <label for="floatingInput">Name</label>
                        </div>

                          {{--  image  --}}
                          <img src="{{ asset('storage/reviews/'. $category->image) }}" width="30%" alt="Category Image">
                          <div class="form-floating mb-3 mt-3">
                             <input type="file" name="image" class="form-control" >
                         </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control basic-conf" placeholder="write Detailed Description" id="basic-conf"
                                      name="review"
                                      style="height: 100px" >{{$category->review}}</textarea>
                            <label for="basic-conf"> Review </label>
                        </div>


                        {{-- status --}}
                        <div class="form-floating mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status"
                                    {{ $category->status ? 'checked' : '' }}>
                            </div>
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

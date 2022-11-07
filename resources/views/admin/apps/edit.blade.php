@extends('layouts.master')
@section('title')
    Apps
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

    <style>
        .bg-light-cust {
            background-color: #f5f5dc !important;
        }
    </style>

    {{-- MIXIN ALERT --}}
    <link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ URL::asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    {{-- Cropper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <style type="text/css">
        img {
            /* display: block; */
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .modal-lg {
            max-width: 800px !important;
        }
    </style>
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Apps
        @endslot
        @slot('li_1')
            Apps
        @endslot
        @slot('li_2')
            Apps
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
                            <h4 class="card-title">Edit App</h4>
                            <p class="text-muted mb-0">Create</p>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ URL::to('/admin/categories') }}"
                               class="btn btn-soft-secondary float-right w-100"
                               title="Go back to categories listing page">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-parsley" id="apps_edit_form" action="{{ URL::to('/admin/services',$app->id) }}"
                          method="POST" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        {{-- App_type_id --}}
                        {{--                      --}}


                        {{-- category_id --}}
                        <div class="form-floating mb-3">
                            <label class="mb-3">Category</label>
                            <select class="select2 form-control mb-3 custom-select" id="floatingInput"
                                    name="category_id" style="width: 100%; height:36px;">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    @if($app->category_id==$category->id)
                                        <option selected value="{{ $category->id }}">{{ $category->title }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        {{-- title --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="title"
                                   value="{{$app->title}}"
                                   placeholder="enter title here" data-parsley-maxlength="200" required>
                            <label for="floatingInput">Title</label>
                        </div>

                        {{--  image  --}}
                        <div class="form-floating mb-3">
                            <input type="file" name="" class="form-control image">
                            <input type="hidden" id="app_icon" name="app_icon" class="form-control image">
                            <img src="{{asset('storage/apps/lg/'.$app->app_icon)}}" id="app_icon_display" width="50"
                                 height="50">
                            <label for="floatingInput">App Icon</label>

                        </div>

                        {{--  Splash screen  --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="file" name="" class="form-control splash_screen">--}}
{{--                            <input type="hidden" id="splash_screen" name="splash_screen"--}}
{{--                                   class="form-control splash_screen">--}}
{{--                            <img src="{{asset('storage/apps/lg/'.$app->splash_screen)}}" id="splash_screen_display"--}}
{{--                                 width="50" height="50">--}}
{{--                            <label for="floatingInput">Splash Screen</label>--}}

{{--                        </div>--}}

                        {{-- seo_description --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="write seo_description" id="floatingTextarea1"--}}
{{--                                      name="seo_description"--}}
{{--                                      style="height: 100px"--}}
{{--                                      data-parsley-maxlength="255">{{$app->seo_description}}</textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Description (max 255)</label>--}}
{{--                        </div>--}}

                        {{-- seo_abstraction --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"--}}
{{--                                      name="seo_abstraction"--}}
{{--                                      style="height: 75px"--}}
{{--                                      data-parsley-maxlength="100">{{$app->seo_abstraction}}</textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Abstraction (max 03 keywords)</label>--}}
{{--                        </div>--}}

                        {{-- seo_keywords --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control" placeholder="write seo_description" id="floatingTextarea1"--}}
{{--                                      name="seo_keywords"--}}
{{--                                      style="height: 100px"--}}
{{--                                      data-parsley-maxlength="500">{{$app->seo_keywords}}</textarea>--}}
{{--                            <label for="floatingTextarea2">SEO Keywords (max 15 keywords)</label>--}}
{{--                        </div>--}}

                        {{-- short_description --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="write seo_description" id="floatingTextarea1"
                                      name="short_description"
                                      style="height: 100px"
                                      data-parsley-maxlength="255">{{$app->short_description}}</textarea>
                            <label for="floatingTextarea2">Short Description (max 255)</label>
                        </div>

                        {{-- detailed_description --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control basic-conf" placeholder="write Detailed Description"
                                      id="basic-conf"
                                      name="detailed_description"
                                      style="height: 100px">{{$app->detailed_description}}</textarea>
                            <label for="basic-conf">Detailed Description </label>
                        </div>


                        {{-- Policies --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control basic-conf" placeholder="write policies" id="basic-conf"--}}
{{--                                      name="policies"--}}
{{--                                      style="height: 100px">{{$app->policies}}</textarea>--}}
{{--                            <label for="basic-conf">Policies</label>--}}
{{--                        </div>--}}
                        {{-- android link --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="text" class="form-control" id="floatingInput" name="android_link"--}}
{{--                                   value="{{$app->android_link}}"--}}
{{--                                   placeholder="enter date time" data-parsley-maxlength="200">--}}
{{--                            <label for="floatingInput">Android Link</label>--}}
{{--                        </div>--}}
                        {{-- ios link --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="text" class="form-control" id="floatingInput" name="ios_link"--}}
{{--                                   value="{{$app->ios_link}}"--}}
{{--                                   placeholder="enter date time" data-parsley-maxlength="200">--}}
{{--                            <label for="floatingInput">Ios Link</label>--}}
{{--                        </div>--}}
                        {{-- release date --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="datetime-local" class="form-control" id="floatingInput" name="release_date"--}}
{{--                                   value="{{$app->release_date}}"--}}
{{--                                   placeholder="enter date time" data-parsley-maxlength="200" required>--}}
{{--                            <label for="floatingInput">Release Date</label>--}}
{{--                        </div>--}}

                        {{-- updated date --}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <input type="datetime-local" class="form-control" id="floatingInput" name="updated_date"--}}
{{--                                   value="{{$app->updated_date}}"--}}
{{--                                   placeholder="enter date time" data-parsley-maxlength="200" required>--}}
{{--                            <label for="floatingInput">Updated Date</label>--}}
{{--                        </div>--}}

                        {{-- status --}}
                        <div class="form-floating mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                       {{$app->status ? 'checked': ''}}
                                       name="status">
                            </div>
                        </div>

                        {{-- featured --}}
                        <div class="form-floating mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Featured</label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                       {{$app->featured ? 'checked' :''}}
                                       name="featured">
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

    {{-- Image Cropper Modal --}}
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cropper.Js Cropper
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
    {{--    splash screeb--}}
    <div class="modal fade" id="modal_splash_image" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cropper.Js Cropper
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="splash_screen_image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop_splash">Crop</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var $modal = $('#modal');

        var image = document.getElementById('image');
        var cropper;

        // OPEN CROPPER MODAL
        $("body").on("change", ".image", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        // MODAL CROPPING RATIO
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 1,
                preview: '.preview',
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        // CROP IMAGE AND CONVERT INTO BLOB AND PASS TO BACKEND
        $("#crop").click(function () {
            canvas = cropper.getCroppedCanvas({
                width: 300,
                height: 300,
            });
            canvas.toBlob(function (blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    document.getElementById('app_icon_display').style = 'display:block';
                    document.getElementById('app_icon_display').src = base64data;
                    document.getElementById('app_icon').value = base64data;

                }
            });
        })
    </script>
    <script>
        var $modal_splash_screen = $('#modal_splash_image');

        var splash_screen_image = document.getElementById('splash_screen_image');
        var cropper_splash_screen;

        // OPEN CROPPER MODAL
        $("body").on("change", ".splash_screen", function (e) {
            var files = e.target.files;
            var done = function (url) {
                splash_screen_image.src = url;
                $modal_splash_screen.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        // MODAL CROPPING RATIO
        $modal_splash_screen.on('shown.bs.modal', function () {
            cropper_splash_screen = new Cropper(splash_screen_image, {
                aspectRatio: 1,
                viewMode: 1,
                preview: '.preview',
            });
        }).on('hidden.bs.modal', function () {
            cropper_splash_screen.destroy();
            cropper_splash_screen = null;
        });

        // CROP IMAGE AND CONVERT INTO BLOB AND PASS TO BACKEND
        $("#crop_splash").click(function () {
            canvas = cropper_splash_screen.getCroppedCanvas({
                width: 300,
                height: 300,
            });
            canvas.toBlob(function (blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    document.getElementById('splash_screen_display').style = 'display:block';
                    document.getElementById('splash_screen_display').src = base64data;
                    document.getElementById('splash_screen').value = base64data;

                }
            });
        })
    </script>
    <script>

        {{--        intro images--}}
        $('.add-new-intro-row-table').click(function () {
            var table = $('body').find('.render-table-intro');
            var body = table.find('.render-body-intro');
            var firstrow = body.find('tr').first().html();
            body.append(`
             <tr>
                <td>

                    <input type="file"
                           class="form-control form-control-lg form-control-solid"
                           name="introImages[]" id=""
                           placeholder="" required>

                </td>
                <td>
                    <button type="button"
                            class="btn-sm form-control form-control-lg form-control-solid   delete-action delete-intro-row-table"
                   >
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        `);
        })

        $('body').on('click', '.delete-intro-row-table', function () {
            // alert('delete');
            // $(this).css('background-color', 'red');
            var count = $('.render-body-intro').find('tr').length;
            var itemId = $(this).attr('data-id')
            if (count > 1) {
                $(this).parents('tr').remove();
                $('#apps_edit_form').append(
                    $('<input>', {type: 'hidden', name: 'deleted_intro_images_ids[]', value: itemId})
                )
            }
        });
        {{--        mockup images--}}

        $('.add-new-row-table').click(function () {
            var table = $('body').find('.render-table');
            var body = table.find('.render-body');
            var firstrow = body.find('tr').first().html();
            body.append(`
             <tr>
                <td>

                    <input type="file"
                           class="form-control form-control-lg form-control-solid"
                           name="mockupImages[]" id=""
                           placeholder="" required>

                </td>
                <td>
                    <button type="button"
                            class="btn-sm form-control form-control-lg form-control-solid   delete-action delete-row-table"
                   >
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        `);
        })

        $('body').on('click', '.delete-row-table', function () {
            // alert('delete');
            // $(this).css('background-color', 'red');
            var count = $('.render-body').find('tr').length;
            var itemId = $(this).attr('data-id')
            if (count > 1) {
                $(this).parents('tr').remove();
                $('#apps_edit_form').append(
                    $('<input>', {type: 'hidden', name: 'deleted_images_ids[]', value: itemId})
                )
            }
        });

        $('.add-new-faq-row-table').click(function () {
            var table = $('body').find('.render-table-faq');
            var body = table.find('.render-body-faq');
            var firstrow = body.find('tr').first().html();
            body.append(`
           <tr>

                <td>
                    <input type="text"
                           class="form-control form-control-lg form-control-solid"
                           name="questions[]" id=""
                           placeholder="Please Enter question" required>
                </td>
                <td>
                    <input type="text"
                           class="form-control form-control-lg form-control-solid"
                           name="answers[]" id=""
                           placeholder="Please Enter answer" required>
                </td>


                <td>
                    <button type="button" class="btn-sm form-control form-control-lg form-control-solid    delete-faq-row-table">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        `);
        })

        $('body').on('click', '.delete-faq-row-table', function () {
            // $(this).css('background-color', 'red');
            var count = $('.render-body-faq').find('tr').length;
            var itemId = $(this).attr('data-id')
            if (count > 1) {
                $(this).parents('tr').remove();
                $('#apps_edit_form').append(
                    $('<input>', {type: 'hidden', name: 'deleted_faqs_ids[]', value: itemId})
                )
            }
        });

    </script>

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

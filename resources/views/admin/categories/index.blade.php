@extends('layouts.master')
@section('title')
    Categories
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Categories
        @endslot
        @slot('li_1')
            categories
        @endslot
        @slot('li_2')
            listing
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12 col-lg-6 col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <span class="h4">{{ $categories_count }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Total Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <span class="h4">{{ $active_categories }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Active Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <span class="h4">{{ $inactive_categories }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Inactive Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <span class="h4">{{ $featured_categories }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Featured Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="button-items">
                        <h5 class="page-title text-center mb-3"><strong>Categories Listing</strong></h5>
                        <a href={{ URL::to('/admin/categories/create') }} class="btn btn-soft-primary">Add Category</a>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <table id="datatable-buttons" class="table dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Sr.</th>
{{--                                <th>Image</th>--}}
                                <th>Title</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
{{--                                    <td>--}}
{{--                                        @if($category->image)--}}
{{--                                        <img src="{{ asset('/storage/categories/'. $category->image) }}" width="30%" alt="Quiz Image">--}}
{{--                                          @else--}}
{{--                                          <img src="{{ asset('/storage/categories/default.jpg') }}" width="30%"  >--}}
{{--                                          @endif--}}
{{--                                    </td>--}}
                                    <td>{{ $category->title }}</td>
{{--                                    <td>{{ $category->likes }}</td>--}}
{{--                                    <td>{{ $category->views }}</td>--}}
{{--                                    <td>{{ $category->subscribers }}</td>--}}
                                    <td>
                                        @if ($category->status)
                                            <span class="badge badge-soft-success">Active</span>
                                        @else
                                            <span class="badge badge-soft-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->featured)
                                            <span class="badge badge-soft-success">Yes</span>
                                        @else
                                            <span class="badge badge-soft-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href='{{ URL::to("/admin/categories/$category->id/edit") }}'
                                            class="btn btn-sm btn-soft-info" title="Go back to categories listing page">
                                            Edit
                                        </a>
                                        <form action='{{ URL::to("/admin/categories/$category->id") }}' method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-soft-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.datatable.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

@extends('layouts.master')
@section('title')
    banners
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
            banners
        @endslot
        @slot('li_1')
            banners
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
                            <span class="h4">{{ $banners_count }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Total banners</h6>
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
                            <span class="h4">{{ $active_banners }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Active banners</h6>
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
                            <span class="h4">{{ $inactive_banners }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Inactive banners</h6>
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
                            <span class="h4">{{ $featured_banners }}</span>
                            <h6 class="text-uppercase text-muted mt-2 m-0">Featured banners</h6>
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
                        <h5 class="page-title text-center mb-3"><strong>banners Listing</strong></h5>
                        <a href="{{ URL::to('/admin/banners/create') }}" class="btn btn-soft-primary">Add Banner</a>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <table id="datatable-buttons" class="table dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($category->image)
                                        <img src="{{ asset('/storage/banners/'. $category->image) }}" width="30%" alt="Quiz Image">
                                          @else
                                          <img src="{{ asset('/storage/banners/default.jpg') }}" width="30%"  >
                                          @endif
                                    </td>
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
{{--                                        <a href='{{ URL::to("/admin/banners/$category->id/edit") }}'--}}
{{--                                            class="btn btn-sm btn-soft-info" title="Go back to banners listing page">--}}
{{--                                            Edit--}}
{{--                                        </a>--}}
                                        <form action='{{ URL::to("/admin/banners/$category->id") }}' method="post"
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

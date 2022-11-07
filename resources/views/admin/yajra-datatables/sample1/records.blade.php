@extends('layouts.master')
@section('title')
    Records
@endsection

@section('css')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Records
        @endslot
        @slot('li_1')
            records
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
                            <span class="h4">100</span>
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
                            <span class="h4">70</span>
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
                            <span class="h4">30</span>
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
                            <span class="h4">12</span>
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
                    <table id="datatable-ajax-crud" class="table dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // GET DATA FROM DATABASE FOR DATATABLE -- AJAX CALL
            $('#datatable-ajax-crud').DataTable({

                processing: true,
                serverSide: true,
                ajax: "{{ url('/admin/records') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                        'visible': true
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'featured',
                        name: 'featured'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                ],
                order: [
                    [0, 'desc']
                ]
            });

        });
    </script>

    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection

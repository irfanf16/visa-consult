@extends('layouts.master')
@section('title')
    Dashboard
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('li_1')
            dashboard
        @endslot
        @slot('li_2')
            Dashboard
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="row justify-content-center">

                {{-- Abbreviations --}}
                <div class="col-md-4 col-lg-3">
                    <a href="{{ URL::to('/admin/categories') }}" title="go to abbrevation module">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Categories</p>
                                        <h3 class="m-0">{{ $categories}}</h3>
                                        <p class="mb-0 text-truncate text-muted">
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Acronyms --}}
                <div class="col-md-4 col-lg-3">
                    <a href="{{ URL::to('/admin/apps') }}" title="go to abbrevation module">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Apps
                                        <h3 class="m-0">{{ $apps }}</h3>
                                        <p class="mb-0 text-truncate text-muted">
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Branches of Science --}}
                <div class="col-md-4 col-lg-3">
                    <a href="{{ URL::to('/admin/subscriber') }}" title="go to abbrevation module">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Subscriber</p>
                                        <h3 class="m-0">{{ $subscribers }}</h3>
                                        <p class="mb-0 text-truncate text-muted">
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Proverbs --}}
                <div class="col-md-4 col-lg-3">
                    <a href="{{ URL::to('/admin/contacts') }}" title="go to abbrevation module">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Contacts</p>
                                        <h3 class="m-0">{{$contacts}}</h3>
                                        <p class="mb-0 text-truncate text-muted">
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Proverbs --}}
{{--                <div class="col-md-3 col-lg-2">--}}
{{--                    <a href="{{ URL::to('/admin/abbreviations') }}" title="go to abbrevation module">--}}
{{--                        <div class="card report-card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row d-flex justify-content-center">--}}
{{--                                    <div class="col">--}}
{{--                                        <p class="text-dark mb-0 fw-semibold">Proverbs</p>--}}
{{--                                        <h3 class="m-0">0</h3>--}}
{{--                                        <p class="mb-0 text-truncate text-muted">--}}
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                --}}{{-- Proverbs --}}
{{--                <div class="col-md-3 col-lg-2">--}}
{{--                    <a href="{{ URL::to('/admin/abbreviations') }}" title="go to abbrevation module">--}}
{{--                        <div class="card report-card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row d-flex justify-content-center">--}}
{{--                                    <div class="col">--}}
{{--                                        <p class="text-dark mb-0 fw-semibold">Proverbs</p>--}}
{{--                                        <h3 class="m-0">0</h3>--}}
{{--                                        <p class="mb-0 text-truncate text-muted">--}}
{{--                                            <span class="text-success">--}}
{{--                                                <i class="mdi mdi-plus"></i>2700--}}
{{--                                            </span>--}}
{{--                                            new this month--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}


            <!--end row-->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Audience Overview</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Year<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">This Year</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="">
                        <div id="ana_dash_1" class="apex-charts"></div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <!--end col-->
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Subscribers</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-top-0">Email</th>
                                </tr>
                                <!--end tr-->
                            </thead>
                            <tbody>
                            @foreach($subscribers_list as $subscriber)
                                <tr>
                                    <td><a href="" class="text-primary">{{$subscriber->email}}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                    <!--end /div-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Contacts Query</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Subject</th>
                                </tr>
                                <!--end tr-->
                            </thead>
                            <tbody>
                            @foreach($contacts_list as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    <td>{{$list->contact_number}}</td>
                                    <td>{{$list->subject}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                    <!--end /div-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.analytics_dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

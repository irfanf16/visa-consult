<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> Dastone - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    @include('layouts.head-css')

    <style>
        .bg-page-content {
            background-color: beige;
        }

        /* Toggle Button Styles */
        .form-check-input {
            height: 20px;
            width: 50px !important;
            margin-right: 10px;
        }

        .form-check-label {
            margin-top: 3px;
        }

        .f-right {
            float: right;
        }
    </style>
</head>

<body>
    @include('layouts.sidebar')

    <div class="page-wrapper">
        @include('layouts.topbar')

        <div class="page-content bg-page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>

    </div>
    @include('layouts.vendor-scripts')
</body>

</html>

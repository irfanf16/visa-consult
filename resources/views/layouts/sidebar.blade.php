<div class="left-sidenav">

    <style>
        .left-sidenav {
            background-color: hsl(0deg 0% 13%);
        }
    </style>
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ URL::to('/admin/dashboard') }}" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/logo.svg') }}" alt="logo-small" class="w-50">
                </span>
        </a>
    </div>
    <!--end logo-->

    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">

            {{-- Dashboard --}}
            <li>
                <a href="{{ URL::to('/admin/dashboard') }}">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            {{-- Users --}}
{{--            <li>--}}
{{--                <a href="javascript: void(0);">--}}
{{--                    <i data-feather="users" class="align-self-center menu-icon"></i>--}}
{{--                    <span>Users</span>--}}
{{--                    <span class="menu-arrow">--}}
{{--                            <i class="mdi mdi-chevron-right"></i>--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ URL::to('/admin/users') }}">--}}
{{--                            <i class="ti-control-record"></i>--}}
{{--                            Listing--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ URL::to('/admin/users/create') }}">--}}
{{--                            <i class="ti-control-record"></i>--}}
{{--                            Add New--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            {{-- Categories --}}
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Categories</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/categories') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/categories/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Services</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/services') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/services/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Banners</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/banners') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/banners/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Blogs</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/blogs') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/blogs/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Reviews</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/reviews') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/reviews/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Affliate</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/affliate') }}">
                            <i class="ti-control-record"></i>
                            Listing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin/affliate/create') }}">
                            <i class="ti-control-record"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Support</span>
                    <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('subscriber') }}">--}}
{{--                            <i class="ti-control-record"></i>--}}
{{--                            Subscribers--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">
                            <i class="ti-control-record"></i>
                            Contacts
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

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

            {{-- Settings --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="settings" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Settings</span>--}}
            {{--                    <span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link" href="{{ URL::to('/admin/settings/general') }}">--}}
            {{--                            <i class="ti-control-record"></i>--}}
            {{--                            General--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link" href="{{ URL::to('/admin/users/account') }}">--}}
            {{--                            <i class="ti-control-record"></i>--}}
            {{--                            Account--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- Educational Apps --}}
            {{--            <li class="menu-label mb-0">Educational Apps</li>--}}

            {{--            --}}{{-- Abbreviations --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Abbreviations</span><span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/abbreviations') }}">Listing</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/abbreviations/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/abbreviations/multiple') }}">Add Multiple</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/abbreviations/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- Acronyms --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Acronyms</span><span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/acronyms') }}">Acronyms</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/acronyms/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/acronyms/multiple') }}">Add Multiple</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/acronyms/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}


            {{--            --}}{{-- Branches of Science --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Branches of Science</span><span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/branches-of-science') }}">Branches</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/branches-of-science/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/branches-of-science/multiple') }}">Add Multiple</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/branches-of-science/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- Provbers --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Proverbs</span><span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/proverbs') }}">Proverbs</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/proverbs/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/proverbs/multiple') }}">Add Multiple</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/proverbs/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- Quiz --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Quiz</span><span class="menu-arrow">--}}
            {{--                                    <i class="mdi mdi-chevron-right"></i>--}}
            {{--                                </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/quiz') }}">Quiz</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/quiz/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/quiz/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- Questions --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="align-justify" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Questions</span><span class="menu-arrow">--}}
            {{--                                        <i class="mdi mdi-chevron-right"></i>--}}
            {{--                                    </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/question') }}">Questions</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/question/create') }}">Add Single</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="{{ URL::to('/admin/question/csv') }}">CSV Upload</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}


            {{--            --}}{{-- Applications --}}
            {{--            <li>--}}
            {{--                <a href="javascript: void(0);">--}}
            {{--                    <i data-feather="grid" class="align-self-center menu-icon"></i>--}}
            {{--                    <span>Applications</span><span class="menu-arrow">--}}
            {{--                            <i class="mdi mdi-chevron-right"></i>--}}
            {{--                        </span>--}}
            {{--                </a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Abbreviations<span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="apps-email-inbox">Inbox</a></li>--}}
            {{--                            <li><a href="apps-email-read">Read Email</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}

            {{--                    <li class="nav-item"><a class="nav-link" href="apps-chat"><i--}}
            {{--                                class="ti-control-record"></i>Chat</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="apps-contact-list"><i--}}
            {{--                                class="ti-control-record"></i>Contact List</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="apps-calendar"><i--}}
            {{--                                class="ti-control-record"></i>Calendar</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="apps-files"><i--}}
            {{--                                class="ti-control-record"></i>File--}}
            {{--                            Manager</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="apps-invoice"><i--}}
            {{--                                class="ti-control-record"></i>Invoice</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="apps-tasks"><i--}}
            {{--                                class="ti-control-record"></i>Tasks</a></li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="apps-project-overview">Overview</a></li>--}}
            {{--                            <li><a href="apps-project-projects">Projects</a></li>--}}
            {{--                            <li><a href="apps-project-board">Board</a></li>--}}
            {{--                            <li><a href="apps-project-teams">Teams</a></li>--}}
            {{--                            <li><a href="apps-project-files">Files</a></li>--}}
            {{--                            <li><a href="apps-new-project">New Project</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="apps-ecommerce-products">Products</a></li>--}}
            {{--                            <li><a href="apps-ecommerce-product-list">Product List</a></li>--}}
            {{--                            <li><a href="apps-ecommerce-product-detail">Product Detail</a></li>--}}
            {{--                            <li><a href="apps-ecommerce-cart">Cart</a></li>--}}
            {{--                            <li><a href="apps-ecommerce-checkout">Checkout</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <li>--}}
            {{--                <a href="javascript: void(0);"><i data-feather="lock"--}}
            {{--                                                  class="align-self-center menu-icon"></i><span>Authentication</span><span--}}
            {{--                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-login"><i--}}
            {{--                                class="ti-control-record"></i>Log--}}
            {{--                            in</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-register"><i--}}
            {{--                                class="ti-control-record"></i>Register</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-recover-pw"><i--}}
            {{--                                class="ti-control-record"></i>Recover Password</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-lock-screen"><i--}}
            {{--                                class="ti-control-record"></i>Lock Screen</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-404"><i--}}
            {{--                                class="ti-control-record"></i>Error 404</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="auth-500"><i--}}
            {{--                                class="ti-control-record"></i>Error 500</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <hr class="hr-dashed hr-menu">--}}
            {{--            <li class="menu-label my-2">Components & Extra</li>--}}

            {{--            <li>--}}
            {{--                <a href="javascript: void(0);"><i data-feather="box"--}}
            {{--                                                  class="align-self-center menu-icon"></i><span>UI Kit</span><span--}}
            {{--                        class="menu-arrow"><i--}}
            {{--                            class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="ui-alerts">Alerts</a></li>--}}
            {{--                            <li><a href="ui-avatar">Avatar</a></li>--}}
            {{--                            <li><a href="ui-buttons">Buttons</a></li>--}}
            {{--                            <li><a href="ui-badges">Badges</a></li>--}}
            {{--                            <li><a href="ui-cards">Cards</a></li>--}}
            {{--                            <li><a href="ui-carousels">Carousels</a></li>--}}
            {{--                            <li><a href="ui-check-radio"><span>Check & Radio</span></a></li>--}}
            {{--                            <li><a href="ui-dropdowns">Dropdowns</a></li>--}}
            {{--                            <li><a href="ui-grids">Grids</a></li>--}}
            {{--                            <li><a href="ui-images">Images</a></li>--}}
            {{--                            <li><a href="ui-list">List</a></li>--}}
            {{--                            <li><a href="ui-modals">Modals</a></li>--}}
            {{--                            <li><a href="ui-navs">Navs</a></li>--}}
            {{--                            <li><a href="ui-navbar">Navbar</a></li>--}}
            {{--                            <li><a href="ui-offcanvas">Offcanvas <span--}}
            {{--                                        class="badge badge-soft-success ms-auto">New</span></a></li>--}}
            {{--                            <li><a href="ui-paginations">Paginations</a></li>--}}
            {{--                            <li><a href="ui-popover-tooltips">Popover & Tooltips</a></li>--}}
            {{--                            <li><a href="ui-progress">Progress</a></li>--}}
            {{--                            <li><a href="ui-spinners">Spinners</a></li>--}}
            {{--                            <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>--}}
            {{--                            <li><a href="ui-toasts">Toasts</a></li>--}}
            {{--                            <li><a href="ui-typography">Typography</a></li>--}}
            {{--                            <li><a href="ui-videos">Videos</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="advanced-animation">Animation</a></li>--}}
            {{--                            <li><a href="advanced-clipboard">Clip Board</a></li>--}}
            {{--                            <li><a href="advanced-highlight">Highlight</a></li>--}}
            {{--                            <li><a href="advanced-idle-timer">Idle Timer</a></li>--}}
            {{--                            <li><a href="advanced-kanban">Kanban</a></li>--}}
            {{--                            <li><a href="advanced-lightbox">Lightbox</a></li>--}}
            {{--                            <li><a href="advanced-nestable">Nestable List</a></li>--}}
            {{--                            <li><a href="advanced-rangeslider">Range Slider</a></li>--}}
            {{--                            <li><a href="advanced-ratings">Ratings</a></li>--}}
            {{--                            <li><a href="advanced-ribbons">Ribbons</a></li>--}}
            {{--                            <li><a href="advanced-session">Session Timeout</a></li>--}}
            {{--                            <li><a href="advanced-sweetalerts">Sweet Alerts</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="forms-advanced">Advance Elements</a></li>--}}
            {{--                            <li><a href="forms-elements">Basic Elements</a></li>--}}
            {{--                            <li><a href="forms-editors">Editors</a></li>--}}
            {{--                            <li><a href="forms-uploads">File Upload</a></li>--}}
            {{--                            <li><a href="forms-repeater">Repeater</a></li>--}}
            {{--                            <li><a href="forms-validation">Validation</a></li>--}}
            {{--                            <li><a href="forms-wizard">Wizard</a></li>--}}
            {{--                            <li><a href="forms-x-editable">X Editable</a></li>--}}

            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="charts-apex">Apex</a></li>--}}
            {{--                            <li><a href="charts-chartjs">Chartjs</a></li>--}}
            {{--                            <li><a href="charts-flot">Flot</a></li>--}}
            {{--                            <li><a href="charts-morris">Morris</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="tables-basic">Basic</a></li>--}}
            {{--                            <li><a href="tables-datatable">Datatables</a></li>--}}
            {{--                            <li><a href="tables-editable">Editable</a></li>--}}
            {{--                            <li><a href="tables-responsive">Responsive</a></li>--}}

            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}

            {{--                            <li><a href="icons-dripicons">Dripicons</a></li>--}}
            {{--                            <li><a href="icons-feather">Feather</a></li>--}}
            {{--                            <li><a href="icons-fontawesome">Font awesome</a></li>--}}
            {{--                            <li><a href="icons-materialdesign">Material Design</a></li>--}}
            {{--                            <li><a href="icons-themify">Themify</a></li>--}}
            {{--                            <li><a href="icons-typicons">Typicons</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="maps-google">Google Maps</a></li>--}}
            {{--                            <li><a href="maps-leaflet">Leaflet Maps</a></li>--}}
            {{--                            <li><a href="maps-vector">Vector Maps</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span--}}
            {{--                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                        <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                            <li><a href="email-templates-alert">Alert Email</a></li>--}}
            {{--                            <li><a href="email-templates-basic">Basic Action Email</a></li>--}}
            {{--                            <li><a href="email-templates-billing">Billing Email</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <li>--}}
            {{--                <a href="widgets"><i data-feather="layers"--}}
            {{--                                     class="align-self-center menu-icon"></i><span>Widgets</span><span--}}
            {{--                        class="badge badge-soft-success menu-arrow">New</span></a>--}}
            {{--            </li>--}}

            {{--            <li>--}}
            {{--                <a href="javascript: void(0);"><i data-feather="file-plus"--}}
            {{--                                                  class="align-self-center menu-icon"></i><span>Pages</span><span--}}
            {{--                        class="menu-arrow"><i--}}
            {{--                            class="mdi mdi-chevron-right"></i></span></a>--}}
            {{--                <ul class="nav-second-level" aria-expanded="false">--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-blogs"><i--}}
            {{--                                class="ti-control-record"></i>Blogs</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-faqs"><i--}}
            {{--                                class="ti-control-record"></i>FAQs</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-pricing"><i--}}
            {{--                                class="ti-control-record"></i>Pricing</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-profile"><i--}}
            {{--                                class="ti-control-record"></i>Profile</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-starter"><i--}}
            {{--                                class="ti-control-record"></i>Starter Page</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-timeline"><i--}}
            {{--                                class="ti-control-record"></i>Timeline</a></li>--}}
            {{--                    <li class="nav-item"><a class="nav-link" href="pages-treeview"><i--}}
            {{--                                class="ti-control-record"></i>Treeview</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
        </ul>
    </div>
</div>

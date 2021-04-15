@extends('layouts/head')
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="{{ url('/home') }}">
            <img style="width: 70%" alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <!-- <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
    <span></span>
   </button> -->
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="/" class="brand-logo">
                        <img style="width: 70%" alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        <ul class="menu-nav">
                            <li class="menu-item {{ Request::is('home') ? ' menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href={{ url('/home') }} class="menu-link">
                                    <span class="svg-icon menu-icon svg-icon-2x">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Dial-numbers.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4"
                                                    rx="2" />
                                                <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2" />
                                                <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">{{ __('menu.dashboard') }}</span>
                                </a>
                            </li>
                            @if (Auth::user()->role != 'admin')
                                <li class="menu-item {{ request()->query('tab') == 'inbox' ? 'menu-item-active' : '' }}"
                                    aria-haspopup="true">
                                    <a href="{{ url('/profiles?tab=inbox') }}" class="menu-link">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-box.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">{{ __('menu.inbox') }}</span>
                                    </a>
                                </li>
                            @endif
                            <li class="menu-section">
                                <h4 class="menu-text">{{ __('menu.manageapplication') }}</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class="menu-item menu-item-submenu {{ Request::is('profile/*') ? 'menu-item-open' : '' }}"
                                aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon svg-icon-2x">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Folder-error.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M2,13.1500272 L2,5.5 C2,4.67157288 2.67157288,4 3.5,4 L6.37867966,4 C6.77650439,4 7.15803526,4.15803526 7.43933983,4.43933983 L10,7 L20.5,7 C21.3284271,7 22,7.67157288 22,8.5 L22,19.5 C22,20.3284271 21.3284271,21 20.5,21 L10.9835977,21 C10.9944753,20.8347382 11,20.6680143 11,20.5 C11,16.3578644 7.64213562,13 3.5,13 C2.98630124,13 2.48466491,13.0516454 2,13.1500272 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M4.5,16 C5.05228475,16 5.5,16.4477153 5.5,17 L5.5,19 C5.5,19.5522847 5.05228475,20 4.5,20 C3.94771525,20 3.5,19.5522847 3.5,19 L3.5,17 C3.5,16.4477153 3.94771525,16 4.5,16 Z M4.5,23 C3.94771525,23 3.5,22.5522847 3.5,22 C3.5,21.4477153 3.94771525,21 4.5,21 C5.05228475,21 5.5,21.4477153 5.5,22 C5.5,22.5522847 5.05228475,23 4.5,23 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">{{ __('menu.profile') }}</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                            <span class="menu-link">
                                                <span class="menu-text">{{ __('menu.profile') }}</span>
                                            </span>
                                        </li>
                                        @if (Auth::user()->role == 'employ')
                                            <li class="menu-item {{ Request::is('profile/add-profile') ? 'menu-item-active' : '' }}"
                                                aria-haspopup="true">
                                                <a href="{{ url('profile/add-profile') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('menu.new') }}</span>
                                                </a>
                                            </li>
                                            <li class="menu-item {{ Request::is('profile/drafts') ? 'menu-item-active' : '' }}"
                                                aria-haspopup="true">
                                                <a href="{{ url('profile/drafts?tab=drafts') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('menu.drafts') }}</span>
                                                </a>
                                            </li>
                                        @endif
                                        <li class="menu-item {{ Request::is('profile/track') ? 'menu-item-active' : '' }}"
                                            aria-haspopup="true">
                                            <a href="{{ url('profile/track?tab=completed') }}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                    <span></span>
                                                </i>
                                                <span class="menu-text">{{ __('menu.trackandsearch') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @if (Auth::user()->role !== 'employ')
                                <li class="menu-item menu-item-submenu {{ Request::is('user/*') ? 'menu-item-open' : '' }}"
                                    aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>

                                        <span class="menu-text"> {{ __('menu.users') }}</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu ">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item {{ Request::is('user/add-user') ? 'menu-item-active' : '' }}"
                                                aria-haspopup="true">
                                                <a href="{{ url('user/add-user') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('menu.new') }}</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                <span class="menu-link">
                                                    <span class="menu-text">{{ __('menu.listall') }}</span>
                                                </span>
                                            </li>
                                            <li class="menu-item {{ Request::is('user/list-users') ? 'menu-item-active' : '' }}"
                                                aria-haspopup="true">
                                                <a href="{{ url('user/list-users') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">{{ __('menu.listall') }}</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            @endif

                            @if (Auth::user()->role == 'admin')
                                <li class="menu-section">
                                    <h4 class="menu-text">{{ __('menu.settings') }}</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item {{ Request::is('departments') ? ' menu-item-active' : '' }}"
                                    aria-haspopup="true">
                                    <a href="{{ url('/departments') }}" class="menu-link">
                                        <span class="svg-icon menu-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Door-open.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect opacity="0.300000012" x="0" y="0" width="24" height="24" />
                                                    <polygon fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        points="7 4.89473684 7 21 5 21 5 3 11 3 11 4.89473684" />
                                                    <path
                                                        d="M10.1782982,2.24743315 L18.1782982,3.6970464 C18.6540619,3.78325557 19,4.19751166 19,4.68102291 L19,19.3190064 C19,19.8025177 18.6540619,20.2167738 18.1782982,20.3029829 L10.1782982,21.7525962 C9.63486295,21.8510675 9.11449486,21.4903531 9.0160235,20.9469179 C9.00536265,20.8880837 9,20.8284119 9,20.7686197 L9,3.23140966 C9,2.67912491 9.44771525,2.23140966 10,2.23140966 C10.0597922,2.23140966 10.119464,2.2367723 10.1782982,2.24743315 Z M11.9166667,12.9060229 C12.6070226,12.9060229 13.1666667,12.2975724 13.1666667,11.5470105 C13.1666667,10.7964487 12.6070226,10.1879981 11.9166667,10.1879981 C11.2263107,10.1879981 10.6666667,10.7964487 10.6666667,11.5470105 C10.6666667,12.2975724 11.2263107,12.9060229 11.9166667,12.9060229 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">{{ __('menu.departments') }}</span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->

                        <div class="topbar">
                            <!--begin::Notifications-->
                            @if (Auth::user()->role != 'admin')
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div
                                            class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                            <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Incoming-box.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
                                                            fill="#000000" />
                                                        <path
                                                            d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) " />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="pulse-ring"></span>
                                        </div>
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Dropdown-->
                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-left dropdown-menu-anim-up dropdown-menu-lg">
                                        <form>
                                            <!--begin::Header-->
                                            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                                                style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">
                                                <!--begin::Title-->
                                                <h4 class="d-flex flex-center rounded-top">
                                                    <span class="text-white">Profile Notifications</span>
                                                    <span id="count-span"
                                                        class="btn btn-text btn-danger btn-sm font-weight-bold btn-font-md ml-2"></span>
                                                </h4>
                                                <!--end::Title-->
                                                <!--begin::Tabs-->
                                                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" data-toggle="tab"
                                                            href="#topbar_notifications_notifications">Notifications</a>
                                                    </li>
                                                </ul>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Content-->
                                            <div class="tab-content">
                                                <!--begin::Tabpane-->
                                                <div class="notifications tab-pane active show p-8"
                                                    id="topbar_notifications_notifications" role="tabpanel">

                                                </div>

                                            </div>
                                            <!--end::Content-->
                                        </form>
                                    </div>
                                    <!--end::Dropdown-->
                                </div>
                            @endif

                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        {{ Auth::user()->name }}</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @extends('layouts.secondary-header')
                    @yield('content')
                </div>
                <!--begin::Footer-->
                <div class="footer  py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Quantum</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark">
                            {{-- <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-0 pr-5">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-0 pr-0">Contact</a> --}}
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">User Profile
                {{-- <small class="text-muted font-size-sm ml-2">12 messages</small> --}}
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" style="background-image:url({{ asset(Auth::user()->image) }})"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        {{ Auth::user()->name }}</a>
                    <div class="text-muted mt-1"> {{ ucwords(str_replace('_', ' ', Auth::user()->role)) }}</div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">
                                    {{ Auth::user()->email }}</span>
                            </span>
                        </a>

                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="{{ url('user/profile-detail') }}/{{ Auth::user()->id }}?role={{ Auth::user()->role }}"
                    class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Profile</div>
                            <div class="text-muted">Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
            </div>

        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Sticky Toolbar-->
    <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
        <!--begin::Item-->
        @if (Auth::user()->role != 'employ')
            <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Add New User"
                data-placement="right">
                <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success"
                    href="{{ url('/user/add-user') }}">
                    <i class="flaticon2-user"></i>
                </a>
            </li>
        @endif

        <!--end::Item-->
        <!--begin::Item-->
        {{-- <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary"
                href="https://preview.keenthemes.com/metronic/demo1/builder.html" target="_blank">
                <i class="flaticon2-gear"></i>
            </a>
        </li> --}}
        <!--end::Item-->
        <!--begin::Item-->
        @if (Auth::user()->role == 'employ')
            <li class="nav-item mb-2" data-toggle="tooltip" title="Add new Profile" data-placement="left">
                <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning"
                    href="{{ url('/profile/add-profile') }}">
                    <i class="flaticon2-telegram-logo"></i>
                </a>
            </li>
        @endif

        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item" data-toggle="tooltip" title="Inbox" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger"
                href="{{ url('/profiles?tab=inbox') }}">
                <i class="flaticon2-chat-1"></i>
            </a>
        </li>
        <!--end::Item-->
    </ul>
    <!--end::Sticky Toolbar-->
    <div id="loader" class="loader"></div>
    <img src={{ url('assets/loader4.svg') }} id="ajaxloader" class="ajaxloader">

    @extends('layouts.footer')

    <!--end::Page Scripts-->
</body>

<!--end::Body-->
<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        /* z-index: 9999; */
        background: url({{url('loader.svg')}}) 50% 50% no-repeat rgb(249, 249, 249);
    }

    .ajaxloader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        /* to make it responsive */
        width: 100vw;
        /* to make it responsive */
        overflow: hidden;
        /*to remove scrollbars */
        z-index: 99999;
        /*to make it appear on topmost part of the page */
        display: none;
        /*to make it visible only on fadeIn() function */
    }

</style>

</html>

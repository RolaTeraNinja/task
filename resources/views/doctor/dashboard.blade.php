@extends('admin.layout.base')

@section('title', 'family doctor')

@section('content')

<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
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
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
           
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            <div class="row mt-0 mt-lg-3">
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 2-->
                                    <div class="card card-custom bg-gray-100 gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-primary py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Export</a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span
                                                                    class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                                    new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-graph-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_2_chart" class="card-rounded-bottom bg-primary"
                                                style="height: 200px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-white px-6 py-8 rounded-xl mr-7 mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                        width="3" height="16" rx="1.5" />
                                                                    <rect fill="#000000" x="8" y="9" width="3"
                                                                        height="11" rx="1.5" />
                                                                    <rect fill="#000000" x="18" y="11" width="3"
                                                                        height="9" rx="1.5" />
                                                                    <rect fill="#000000" x="3" y="13" width="3"
                                                                        height="7" rx="1.5" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#"
                                                            class="text-warning font-weight-bold font-size-h6">Weekly
                                                            Sales</a>
                                                    </div>
                                                    <div class="col bg-white px-6 py-8 rounded-xl mb-7">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#"
                                                            class="text-primary font-weight-bold font-size-h6 mt-2">New
                                                            Users</a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-white px-6 py-8 rounded-xl mr-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#"
                                                            class="text-danger font-weight-bold font-size-h6 mt-2">Item
                                                            Orders</a>
                                                    </div>
                                                    <div class="col bg-white px-6 py-8 rounded-xl">
                                                        <span
                                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <path
                                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="#"
                                                            class="text-success font-weight-bold font-size-h6 mt-2">Bug
                                                            Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 18-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <div class="card-title font-weight-bolder">
                                                <div class="card-label">Weekly Sales Stats
                                                    <div class="font-size-sm text-muted mt-2">890,344 Sales</div>
                                                </div>
                                            </div>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_18_chart" style="height: 250px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="mt-n12 position-relative zindex-0">
                                                <!--begin::Widget Item-->
                                                <div class="d-flex align-items-center mb-8">
                                                    <!--begin::Symbol-->
                                                    <div
                                                        class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                                                        <div class="symbol-label">
                                                            <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                            width="3" height="16" rx="1.5" />
                                                                        <rect fill="#000000" x="8" y="9" width="3"
                                                                            height="11" rx="1.5" />
                                                                        <rect fill="#000000" x="18" y="11" width="3"
                                                                            height="9" rx="1.5" />
                                                                        <rect fill="#000000" x="3" y="13" width="3"
                                                                            height="7" rx="1.5" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="#"
                                                            class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Most
                                                            Sales</a>
                                                        <div class="font-size-sm text-muted font-weight-bold mt-1">
                                                            Authors with the best sales</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Widget Item-->
                                                <!--begin::Widget Item-->
                                                <div class="d-flex align-items-center mb-8">
                                                    <!--begin::Symbol-->
                                                    <div
                                                        class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                                                        <div class="symbol-label">
                                                            <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-pie.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="#"
                                                            class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Total
                                                            Sales Lead</a>
                                                        <div class="font-size-sm text-muted font-weight-bold mt-1">40%
                                                            increased on week-to-week reports</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Widget Item-->
                                                <!--begin::Widget Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div
                                                        class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                                                        <div class="symbol-label">
                                                            <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path
                                                                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                        <path
                                                                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="#"
                                                            class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Average
                                                            Bestseller</a>
                                                        <div class="font-size-sm text-muted font-weight-bold mt-1">
                                                            Pitstop Email Marketing</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Widget Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 18-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::List Widget 7-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Naviigation-->
                                                        <ul class="navi">
                                                            <li class="navi-header font-weight-bold py-5">
                                                                <span class="font-size-lg">Add New:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="navi-icon flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Members</span>
                                                                    <span class="navi-label">
                                                                        <span
                                                                            class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i
                                                                            class="navi-icon flaticon2-telegram-logo"></i>
                                                                    </span>
                                                                    <span class="navi-text">Project</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="navi-icon flaticon2-new-email"></i>
                                                                    </span>
                                                                    <span class="navi-text">Record</span>
                                                                    <span class="navi-label">
                                                                        <span
                                                                            class="label label-light-success label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer pt-5 pb-4">
                                                                <a class="btn btn-light-primary font-weight-bolder btn-sm"
                                                                    href="#">More options</a>
                                                                <a class="btn btn-clean font-weight-bold btn-sm d-none"
                                                                    href="#" data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    title="Click to learn more...">Learn more</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Naviigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center flex-wrap mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50 symbol-light mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/misc/006-plurk.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                                        Authors</a>
                                                    <span class="text-muted font-weight-bold">Mark, Rowling,
                                                        Esther</span>
                                                </div>
                                                <!--end::Text-->
                                                <span
                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center flex-wrap mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50 symbol-light mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/misc/015-telegram.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                                        Authors</a>
                                                    <span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
                                                </div>
                                                <!--end::Text-->
                                                <span
                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center flex-wrap mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50 symbol-light mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/misc/003-puzzle.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New
                                                        Users</a>
                                                    <span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
                                                </div>
                                                <!--end::Text-->
                                                <span
                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center flex-wrap mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50 symbol-light mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/misc/005-bebo.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                                        Customers</a>
                                                    <span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
                                                </div>
                                                <!--end::Text-->
                                                <span
                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50 symbol-light mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                                    <a href="#"
                                                        class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted font-weight-bold">Disco, Retro,
                                                        Sports</span>
                                                </div>
                                                <!--end::Text-->
                                                <span
                                                    class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 7-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Stats Widget 1-->
                                    <div class="card card-custom bgi-no-repeat gutter-b card-stretch"
                                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <a href="#"
                                                class="card-title font-weight-bold text-muted text-hover-primary font-size-h5">Meeting
                                                Schedule</a>
                                            <div class="font-weight-bold text-success mt-9 mb-5">3:30PM - 4:20PM</div>
                                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">Craft a headline
                                                that is informative
                                                <br />and will capture readers</p>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Stats Widget 1-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Stats Widget 2-->
                                    <div class="card card-custom bgi-no-repeat gutter-b card-stretch"
                                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-2.svg)">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <a href="#"
                                                class="card-title font-weight-bold text-muted text-hover-primary font-size-h5">Announcement</a>
                                            <div class="font-weight-bold text-success mt-9 mb-5">03 May 2020</div>
                                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">Great blog posts
                                                don’t just happen
                                                <br />Even the best bloggers need it</p>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Stats Widget 2-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Stats Widget 3-->
                                    <div class="card card-custom bgi-no-repeat gutter-b card-stretch"
                                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                                        <!--begin::body-->
                                        <div class="card-body">
                                            <a href="#"
                                                class="card-title font-weight-bold text-muted text-hover-primary font-size-h5">New
                                                Release</a>
                                            <div class="font-weight-bold text-success mt-9 mb-5">ReactJS</div>
                                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">AirWays - A
                                                Front-end solution for
                                                <br />airlines build with ReactJS</p>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Stats Widget 3-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Base Table Widget 3-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Files</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than
                                                    400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#"
                                                    class="btn btn-light-primary btn-md py-2 font-weight-bolder dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Create</a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header pb-1">
                                                            <span
                                                                class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                                new:</span>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                                </span>
                                                                <span class="navi-text">Order</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="flaticon2-calendar-8"></i>
                                                                </span>
                                                                <span class="navi-text">Event</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="flaticon2-graph-1"></i>
                                                                </span>
                                                                <span class="navi-text">Report</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="flaticon2-rocket-1"></i>
                                                                </span>
                                                                <span class="navi-text">Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="flaticon2-writing"></i>
                                                                </span>
                                                                <span class="navi-text">File</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                            <th class="p-0" style="min-width: 140px"></th>
                                                            <th class="p-0" style="min-width: 100px"></th>
                                                            <th class="p-0" style="min-width: 40px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-success mr-2">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-2x svg-icon-success">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24"
                                                                                        height="24" />
                                                                                    <path
                                                                                        d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero"
                                                                                        opacity="0.3" />
                                                                                    <path
                                                                                        d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                        fill="#000000" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">ReactJs,
                                                                    HTML</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">4600
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder font-size-lg">5.4MB</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-danger mr-2">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-2x svg-icon-danger">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24"
                                                                                        height="24" />
                                                                                    <rect fill="#000000" x="4" y="4"
                                                                                        width="7" height="7" rx="1.5" />
                                                                                    <path
                                                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                        fill="#000000" opacity="0.3" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">Python,
                                                                    MySQL</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">7200
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder font-size-lg">2.8MB</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-info mr-2">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-2x svg-icon-info">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <polygon
                                                                                        points="0 0 24 0 24 24 0 24" />
                                                                                    <path
                                                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero"
                                                                                        opacity="0.3" />
                                                                                    <path
                                                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">Laravel,
                                                                    Metronic</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">890
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder font-size-lg">1.5MB</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-warning mr-2">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-2x svg-icon-warning">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24"
                                                                                        height="24" />
                                                                                    <path
                                                                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                        fill="#000000" />
                                                                                    <rect fill="#000000" opacity="0.3"
                                                                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                        x="16.3255682" y="2.94551858"
                                                                                        width="3" height="18" rx="1" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">AngularJS,
                                                                    C#</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">6370
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder font-size-lg">890KB</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-primary mr-2">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-2x svg-icon-primary">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24"
                                                                                        height="24" />
                                                                                    <path
                                                                                        d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                                        fill="#000000" />
                                                                                    <path
                                                                                        d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                                        fill="#000000" opacity="0.3" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">ReactJS,
                                                                    Ruby</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">354
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder font-size-lg">500KB</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::table-->
                                        </div>
                                        <!--begin::Body-->
                                    </div>
                                    <!--end::Base Table Widget 3-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Base Table Widget 5-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">New
                                                    Arrivals</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than
                                                    400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_4_1">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_4_2">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_tab_pane_4_3">Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                            <th class="p-0" style="min-width: 140px"></th>
                                                            <th class="p-0" style="min-width: 110px"></th>
                                                            <th class="p-0" style="min-width: 50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/006-plurk.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Successful
                                                                    Fellas</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">ReactJs,
                                                                    HTML</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-primary label-inline">Approved</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/015-telegram.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most
                                                                    Successful</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">Python,
                                                                    MySQL</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">In
                                                                    Progress</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Awesome
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-muted font-weight-500">Laravel,Metronic</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-success label-inline">Success</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/005-bebo.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best
                                                                    Customers</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">AngularJS,
                                                                    C#</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-danger label-inline">Rejected</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-5 pl-0">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Amazing
                                                                    Templates</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-500">ReactJS,
                                                                    Ruby</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">In
                                                                    Progress</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Tablet-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Base Table Widget 5-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 10-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">7
                                                        Hours Ago</span>
                                                    <div class="symbol symbol-50">
                                                        <span class="symbol-label bg-light-light">
                                                            <img src="assets/media/svg/misc/006-plurk.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Link-->
                                                <a href="#"
                                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop
                                                    - Multiple Email
                                                    <br />Generator</a>
                                                <!--end::Link-->
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop
                                                    creates quick email campaigns.
                                                    <br />We help to strengthen your brand
                                                    <br />for your every purpose.</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/024-boy-9.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 10-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 11-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">2
                                                        Days Ago</span>
                                                    <div class="symbol symbol-50">
                                                        <span class="symbol-label bg-light-light">
                                                            <img src="assets/media/svg/misc/015-telegram.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                                <a href="#"
                                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">Craft
                                                    - ReactJS Admin
                                                    <br />Theme</a>
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Craft uses
                                                    the latest and greatest frameworks
                                                    <br />with ReactJS for complete modernization and
                                                    <br />future proofing your business operations
                                                    <br />and sales opportunities</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin: Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/024-boy-9.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/005-girl-2.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 11-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Mixed Widget 12-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1 pb-5">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center pr-2 mb-6">
                                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">5
                                                        Weeks Ago</span>
                                                    <div class="symbol symbol-50">
                                                        <span class="symbol-label bg-light-light">
                                                            <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                                <a href="#"
                                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">KT.com
                                                    - High Quality
                                                    <br />Templates</a>
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Easy to
                                                    use, incredibly flexible and secure
                                                    <br />with in-depth documentation that outlines
                                                    <br />everything for you</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--begin::Team-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                                <!--begin::Pic-->
                                                <a href="#" class="symbol symbol-45 symbol-light">
                                                    <div class="symbol-label">
                                                        <img src="assets/media/svg/avatars/024-boy-9.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </div>
                                                </a>
                                                <!--end::Pic-->
                                            </div>
                                            <!--end::Team-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 12-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--begin::Mixed Widget 16-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <div class="card-title font-weight-bolder">
                                                <div class="card-label">Weekly Sales Stats
                                                    <div class="font-size-sm text-muted mt-2">890,344 Sales</div>
                                                </div>
                                            </div>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span
                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                    href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_16_chart" style="height: 200px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="mt-10 mb-5">
                                                <div class="row row-paddingless mb-10">
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-info">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    $2,034</div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                    Author Sales</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                    fill="#000000" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                    x="16.3255682" y="2.94551858"
                                                                                    width="3" height="18" rx="1" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    $706</div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                    Commission</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <div class="row row-paddingless">
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    $49</div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                    Average Bid</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-primary mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <rect fill="#000000" opacity="0.3" x="4"
                                                                                    y="4" width="8" height="16" />
                                                                                <path
                                                                                    d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    $5.8M</div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                    All Time Sales</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 16-->
                                </div>
                                <div class="col-lg-8">
                                    <!--begin::Base Table Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">New
                                                    Arrivals</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than
                                                    400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_2_1">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_2_2">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_tab_pane_2_3">Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width: 150px"></th>
                                                            <th class="p-0" style="min-width: 140px"></th>
                                                            <th class="p-0" style="min-width: 120px"></th>
                                                            <th class="p-0" style="min-width: 40px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/006-plurk.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Successful
                                                                    Fellas</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">ReactJs,
                                                                    HTML</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">4600
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/015-telegram.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most
                                                                    Successful</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">Python,
                                                                    MySQL</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">7200
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Awesome
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">Laravel,
                                                                    Metronic</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">890
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/005-bebo.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best
                                                                    Customers</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">AngularJS,
                                                                    C#</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">6370
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">Amazing
                                                                    Templates</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">ReactJS,
                                                                    Ruby</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span class="text-muted font-weight-bold">354
                                                                    Users</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                    x="11" y="5" width="2" height="14"
                                                                                    rx="1" />
                                                                                <path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Base Table Widget 2-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

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
                <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
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
                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                    <div class="text-muted mt-1">Application Developer</div>
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
                                <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                            </span>
                        </a>
                       
                        <a href="{{route('doctor.logout')}}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
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
                <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
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
                                <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/user/profile-3.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-warning">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13"
                                                rx="1.5" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8"
                                                rx="1.5" />
                                            <path
                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Messages</div>
                            <div class="text-muted">Inbox and tasks</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/user/profile-2.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Activities</div>
                            <div class="text-muted">Logs and notifications</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Tasks</div>
                            <div class="text-muted">latest tasks and projects</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
            </div>
            <!--end::Nav-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">Recent Notifications</h5>
                <!--end:Heading-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-warning mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                            purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-success mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                    <path
                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                            be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-danger mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                        fill="#000000" />
                                    <path
                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                            would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5">
                    <span class="svg-icon svg-icon-info mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                    <path
                                        d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                        fill="#000000"
                                        transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                    <path
                                        d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                    <path
                                        d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                            best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->
    <!--begin::Quick Cart-->
    <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Shopping Cart</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                        <span class="text-muted">The best kitchen gadget in 2020</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#"
                            class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                        <span class="text-muted">Smart tool for cooking</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                        <span class="text-muted">Professional camera for edge cutting shots</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                        <span class="text-muted">Manufactoring unique objects</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                        <span class="text-muted">Perfect animation tool</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                    <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-7">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                    <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
                </div>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Cart-->
    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New
                                    Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                    Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                    Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-warning mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                                    purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-success mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                            <path
                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                                    be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-danger mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                                    would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                            <span class="svg-icon svg-icon-info mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                            <path
                                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                fill="#000000"
                                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                            <path
                                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                            <path
                                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                                    best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-psd text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                                    <div class="text-muted">40% less alerts thar last week</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                                    <div class="text-muted">Most posted 12 time</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                                    <div class="text-muted">9 photodrapehrs, 7 designer</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-info icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                                    <div class="text-muted">Mostly PSD end AL concepts</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" name="quick_panel_notifications_2" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 text-right">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->
    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-drop"></i>
                                                </span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-list-3"></i>
                                                </span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-primary label-inline font-weight-bold">new</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-bell-2"></i>
                                                </span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-gear"></i>
                                                </span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-magnifier-tool"></i>
                                                </span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-bell-2"></i>
                                                </span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="400" data-mobile-height="350">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        How likely are you to recommend our company to your friends and family?</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                        repository on GitHub.</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Ok, Understood!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        You’ll receive notifications for all issues, pull requests!</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        You can unwatch this repository immediately by clicking here:
                                        <a href="#">https://github.com</a></div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training
                                        also viewed</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                        Most purchased Business courses during this sale!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                    </div>
                                    <div
                                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                        provided</div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                    <i class="flaticon2-photograph icon-lg"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-icon btn-md">
                                    <i class="flaticon2-photo-camera icon-lg"></i>
                                </a>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Chat Panel-->
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
        <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos"
            data-placement="right">
            <a class="btn btn-sm btn-icon btn-bg-light btn-text-success btn-hover-success" href="#">
                <i class="flaticon2-drop"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-text-primary btn-hover-primary"
                href="https://keenthemes.com/metronic/preview/demo7/builder.html" target="_blank">
                <i class="flaticon2-gear"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-text-warning btn-hover-warning"
                href="https://keenthemes.com/metronic/?page=docs" target="_blank">
                <i class="flaticon2-telegram-logo"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example"
            data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-text-danger btn-hover-danger" href="#" data-toggle="modal"
                data-target="#kt_chat_modal">
                <i class="flaticon2-chat-1"></i>
            </a>
        </li>
        <!--end::Item-->
    </ul>
    <!--end::Sticky Toolbar-->
    <!--begin::Demo Panel-->
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Select A Demo</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo1.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo1/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo2.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo2/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo3.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo3/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo4.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo4/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo5.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo5/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo6.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo6/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo7.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo7/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo8.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo8/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo9.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo9/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo10.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="https://keenthemes.com/metronic/preview/demo10/index.html"
                            class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html"
                            class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo11.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo12.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo13.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo14.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo15.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo16.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo17.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo18.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo19.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo20.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo21.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo22.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo23.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo24.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo25.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo26.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo27.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo28.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo29.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="assets//../../../../../../doc/assets/img/demos/demo30.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>

</body>

@endsection

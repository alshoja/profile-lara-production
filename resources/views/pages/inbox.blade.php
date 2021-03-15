@extends('layouts.app')
@section('content')
    <div class="container">
        <!--begin::Notice-->

        <!--end::Notice-->
        <!--begin::Card-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">Profiles</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your profiles</span>
                                </h3>

                                <div class="card-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4" data-toggle="tab"
                                                href="#kt_tab_pane_11_4">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4" data-toggle="tab"
                                                href="#kt_tab_pane_11_3">Completed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4" data-toggle="tab"
                                                href="#kt_tab_pane_11_2">Drafts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                href="#kt_tab_pane_11_1">All</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_11_1">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-vertical-center">
                                                <thead>
                                                    <tr class="text-left text-uppercase">
                                                        <!-- <th class="pl-0" style="width: 20px">
                      <label class="checkbox checkbox-lg checkbox-inline mr-2">
                       <input type="checkbox" value="1" />
                       <span></span>
                      </label>
                     </th> -->
                                                        <th class="pr-0" style="width: 50px">authors</th>
                                                        <th class="pr-0" style="min-width: 120px"></th>
                                                        <th class="pr-0" style="min-width: 120px">country</th>
                                                        <th class="pr-0" style="min-width: 150px">company</th>
                                                        <th class="pr-0" style="min-width: 150px">status</th>
                                                        <!-- <th class="pr-0" style="min-width: 160px">action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @php
                                                        $Inames = ['001-boy.svg', '018-girl-9.svg', '047-girl-25.svg', '014-girl-7.svg', '014-girl-7.svg'];
                                                    @endphp
                                                    @for ($modal = 0; $modal < 10; $modal++)
                                                        @php
                                                            $profile = $modal + 12;
                                                            $decition = $modal + 32;
                                                            $track = $modal + 55;
                                                            $doc1 = $modal + 66;
                                                            $doc2 = $modal + 88;
                                                            $doc3 = $modal + 92;
                                                            $note = $modal + 23;
                                                            $random_keys = array_rand($Inames, 5);
                                                        @endphp
                                                        <tr>
                                                            <!-- <td class="pl-0 py-7">
                       <label class="checkbox checkbox-lg checkbox-inline">
                        <input type="checkbox" value="1" />
                        <span></span>
                       </label>
                      </td> -->
                                                            <td class="pl-0">
                                                                <div class="symbol symbol-50 symbol-light mt-1">
                                                                    <span class="symbol-label">
                                                                        <img src="assets/media/svg/avatars/@php echo $Inames[$random_keys[0]] @endphp"
                                                                            class="h-75 align-self-end" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                    onclick="addClass('@php  echo $profile + 1 @endphp ','profile_nav_item')"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModalSizeXl @php  echo $modal @endphp "
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                                                                    Simmons</a>
                                                                <span
                                                                    class="text-muted font-weight-bold text-muted d-block">Male</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">CitizenShip
                                                                    Location</span>
                                                                <span class="text-muted font-weight-bold">
                                                                    Nationality</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">Final
                                                                    Destination </span>
                                                                <span class="text-muted font-weight-bold">Shipping No</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                            role="progressbar" style="width: 65%;"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                                            version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                                fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path
                                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>

                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                                            version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                                fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path
                                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                <path
                                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                                            version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                                fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000" fill-rule="nonzero" />
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header pb-1">
                                                                            <span
                                                                                class="text-primary text-uppercase font-weight-bold font-size-sm">Options</span>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon2-reply"></i>
                                                                                </span>
                                                                                <span class="navi-text">Forward as
                                                                                    New</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon-speech-bubble"></i>
                                                                                </span>
                                                                                <span data-toggle="modal"
                                                                                    data-target="#exampleModalSizeXl @php  echo $modal @endphp "
                                                                                    onclick='addClass(@php  echo $note + 6 @endphp ,"note_nav_item")'
                                                                                    class="navi-text">Reply to note</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon-placeholder-3"></i>
                                                                                </span>
                                                                                <span data-toggle="modal"
                                                                                    data-target="#exampleModalSizeXl @php  echo $modal @endphp "
                                                                                    onclick='addClass(@php  echo $track + 3 @endphp ,"track_nav_item")'
                                                                                    class="navi-text">Track</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon2-writing"></i>
                                                                                </span>
                                                                                <span class="navi-text">Submit Draft</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade" id="exampleModalSizeXl @php echo $modal @endphp"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalSizeXl @php echo $modal @endphp"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                            Title @php echo $modal @endphp</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="card card-custom">
                                                                        <div class="card-header">
                                                                            <div class="card-toolbar">
                                                                                <ul
                                                                                    class="nav nav-light-danger nav-bold nav-pills">
                                                                                    <li class="nav-item">
                                                                                        <a id="profile_nav_item @php echo $profile + 1 @endphp"
                                                                                            class="nav-link"
                                                                                            data-toggle="tab"
                                                                                            href="#kt_tab_pane_5_ @php echo $profile + 1 @endphp">
                                                                                            <span class="nav-icon"><i
                                                                                                    class="flaticon-businesswoman"></i></span>
                                                                                            <span
                                                                                                class="nav-text">E-Profile</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link"
                                                                                            data-toggle="tab"
                                                                                            href="#kt_tab_pane_5_ @php echo $decition + 2 @endphp">
                                                                                            <span class="nav-icon"><i
                                                                                                    class="flaticon-information"></i></span>
                                                                                            <span
                                                                                                class="nav-text">Decision</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a id="track_nav_item @php echo $track + 3 @endphp"
                                                                                            class="nav-link"
                                                                                            data-toggle="tab"
                                                                                            href="#kt_tab_pane_5_ @php echo $track + 3 @endphp">
                                                                                            <span class="nav-icon"><i
                                                                                                    class="flaticon-placeholder-3"></i></span>
                                                                                            <span
                                                                                                class="nav-text">Track</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item dropdown">
                                                                                        <a class="nav-link dropdown-toggle"
                                                                                            data-toggle="dropdown" href="#"
                                                                                            role="button"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false">
                                                                                            <span class="nav-icon"><i
                                                                                                    class="flaticon-profile"></i></span>
                                                                                            <span
                                                                                                class="nav-text">Docs</span>
                                                                                        </a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item"
                                                                                                data-toggle="tab"
                                                                                                href="#kt_tab_pane_5_ @php echo $doc1 + 4 @endphp">Doc-1</a>
                                                                                            <a class="dropdown-item"
                                                                                                data-toggle="tab"
                                                                                                href="#kt_tab_pane_5_ @php echo $doc2 + 5 @endphp">Doc-2</a>
                                                                                            <a class="dropdown-item"
                                                                                                data-toggle="tab"
                                                                                                href="#kt_tab_pane_5_ @php echo $doc3 + 6 @endphp">Doc-3</a>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a id="note_nav_item @php echo $note + 6 @endphp"
                                                                                            class="nav-link"
                                                                                            data-toggle="tab"
                                                                                            href="#kt_tab_pane_5_ @php echo $note + 6 @endphp">
                                                                                            <span class="nav-icon"><i
                                                                                                    class="flaticon-speech-bubble-1"></i></span>
                                                                                            <span
                                                                                                class="nav-text">Notes</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane fade show active"
                                                                                    id="kt_tab_pane_5_ @php echo $profile + 1 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $profile + 1 @endphp">
                                                                                    <p> @php echo $modal @endphp Eprofile Ipsum is
                                                                                        simply dummy text of the printing
                                                                                        and typesetting industry. Lorem
                                                                                        Ipsum passages, and more recently
                                                                                        with desktop publishing software
                                                                                        like Aldus PageMaker including
                                                                                        versions of Lorem Ipsum. Lorem Ipsum
                                                                                        passages, and more recently with
                                                                                        desktop publishing software like
                                                                                        Aldus PageMaker including versions
                                                                                        of Lorem Ipsum. Lorem Ipsum is
                                                                                        simply dummy text of the printing
                                                                                        and typesetting industry. with
                                                                                        desktop publishing software like
                                                                                        Aldus PageMaker including versions
                                                                                        of Lorem Ipsum. Lorem Ipsum
                                                                                        passages, and more recently with
                                                                                        desktop publishing software like
                                                                                        Aldus PageMaker including versions
                                                                                        of Lorem Ipsum</p>
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $decition + 2 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $decition + 2 @endphp">
                                                                                    <div
                                                                                        class="card card-custom mb-8 mb-lg-0">
                                                                                        <div class="card-body">
                                                                                            <div
                                                                                                class="d-flex align-items-center p-5">
                                                                                                <div class="mr-6">
                                                                                                    <span
                                                                                                        class="svg-icon svg-icon-4x">
                                                                                                        <img
                                                                                                            src="assets/media/svg/icons/Map/Direction2.svg" />
                                                                                                    </span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-flex flex-column">
                                                                                                    <a href="#"
                                                                                                        class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                                                                                        Sign
                                                                                                    </a>
                                                                                                    <div
                                                                                                        class="text-dark-75">
                                                                                                        Signed Ipsum is
                                                                                                        simply dummy text of
                                                                                                        the printing and
                                                                                                        typesetting
                                                                                                        industry.
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $track + 3 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $track + 3 @endphp">
                                                                                    <!-- <p> @php echo $modal @endphp Track Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->

                                                                                    <div style="margin-right: 80px;"
                                                                                        class="timeline timeline-5">
                                                                                        <div class="timeline-items">
                                                                                            <!--begin::Item-->
                                                                                            <div class="timeline-item">
                                                                                                <!--begin::Icon-->
                                                                                                <div
                                                                                                    class="timeline-media bg-light-primary">
                                                                                                    <span
                                                                                                        class="svg-icon svg-icon-primary svg-icon-md">
                                                                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Down-2.svg--><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                            width="24px"
                                                                                                            height="24px"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            version="1.1">
                                                                                                            <g stroke="none"
                                                                                                                stroke-width="1"
                                                                                                                fill="none"
                                                                                                                fill-rule="evenodd">
                                                                                                                <polygon
                                                                                                                    points="0 0 24 0 24 24 0 24" />
                                                                                                                <path
                                                                                                                    d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z"
                                                                                                                    fill="#000000"
                                                                                                                    fill-rule="nonzero"
                                                                                                                    transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) " />
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                        <!--end::Svg Icon-->
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--end::Icon-->

                                                                                                <!--begin::Info-->
                                                                                                <div
                                                                                                    class="timeline-desc timeline-desc-light-primary">
                                                                                                    <span
                                                                                                        class="font-weight-bolder text-primary">Salih
                                                                                                        09:30 AM</span>
                                                                                                    <p
                                                                                                        class="font-weight-normal text-dark-50 pb-2">
                                                                                                        To start a blog,
                                                                                                        think of a topic
                                                                                                        about and first
                                                                                                        brainstorm ways to
                                                                                                        write details
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!--end::Info-->
                                                                                            </div>
                                                                                            <!--end::Item-->

                                                                                            <!--begin::Item-->
                                                                                            <div class="timeline-item">
                                                                                                <!--begin::Icon-->
                                                                                                <div
                                                                                                    class="timeline-media bg-light-primary">
                                                                                                    <span
                                                                                                        class="svg-icon svg-icon-primary svg-icon-md">
                                                                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Down-2.svg--><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                            width="24px"
                                                                                                            height="24px"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            version="1.1">
                                                                                                            <g stroke="none"
                                                                                                                stroke-width="1"
                                                                                                                fill="none"
                                                                                                                fill-rule="evenodd">
                                                                                                                <polygon
                                                                                                                    points="0 0 24 0 24 24 0 24" />
                                                                                                                <path
                                                                                                                    d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z"
                                                                                                                    fill="#000000"
                                                                                                                    fill-rule="nonzero"
                                                                                                                    transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) " />
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                </div>
                                                                                                <!--end::Icon-->

                                                                                                <!--begin::Info-->
                                                                                                <div
                                                                                                    class="timeline-desc timeline-desc-light-warning">
                                                                                                    <span
                                                                                                        class="font-weight-bolder text-primary">Alshoja
                                                                                                        2:45 PM</span>
                                                                                                    <p
                                                                                                        class="font-weight-normal text-dark-50 pt-1 pb-2">
                                                                                                        To start a blog,
                                                                                                        think of a topic
                                                                                                        about and first
                                                                                                        brainstorm ways to
                                                                                                        write details
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!--end::Info-->
                                                                                            </div>
                                                                                            <!--end::Item-->

                                                                                            <!--begin::Item-->
                                                                                            <div class="timeline-item">
                                                                                                <!--begin::Icon-->
                                                                                                <div
                                                                                                    class="timeline-media bg-light-primary">
                                                                                                    <span
                                                                                                        class="svg-icon svg-icon-primary svg-icon-md">
                                                                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Down-2.svg--><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                            width="24px"
                                                                                                            height="24px"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            version="1.1">
                                                                                                            <g stroke="none"
                                                                                                                stroke-width="1"
                                                                                                                fill="none"
                                                                                                                fill-rule="evenodd">
                                                                                                                <polygon
                                                                                                                    points="0 0 24 0 24 24 0 24" />
                                                                                                                <path
                                                                                                                    d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z"
                                                                                                                    fill="#000000"
                                                                                                                    fill-rule="nonzero"
                                                                                                                    transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) " />
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                </div>
                                                                                                <!--end::Icon-->

                                                                                                <!--begin::Info-->
                                                                                                <div
                                                                                                    class="timeline-desc timeline-desc-light-success">
                                                                                                    <span
                                                                                                        class="font-weight-bolder text-primary">Haleem
                                                                                                        3:12 PM</span>
                                                                                                    <p
                                                                                                        class="font-weight-normal text-dark-50 pt-1 pb-2">
                                                                                                        To start a blog,
                                                                                                        think of a topic
                                                                                                        about and first
                                                                                                        brainstorm ways to
                                                                                                        write details
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!--end::Info-->
                                                                                            </div>
                                                                                            <!--end::Item-->

                                                                                            <!--begin::Item-->
                                                                                            <div class="timeline-item">
                                                                                                <!--begin::Icon-->
                                                                                                <div
                                                                                                    class="timeline-media bg-light-danger">
                                                                                                    <span
                                                                                                        class="svg-icon svg-icon-danger svg-icon-md">
                                                                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Code/Error-circle.svg--><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                            width="24px"
                                                                                                            height="24px"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            version="1.1">
                                                                                                            <g stroke="none"
                                                                                                                stroke-width="1"
                                                                                                                fill="none"
                                                                                                                fill-rule="evenodd">
                                                                                                                <rect x="0"
                                                                                                                    y="0"
                                                                                                                    width="24"
                                                                                                                    height="24" />
                                                                                                                <circle
                                                                                                                    fill="#000000"
                                                                                                                    opacity="0.3"
                                                                                                                    cx="12"
                                                                                                                    cy="12"
                                                                                                                    r="10" />
                                                                                                                <path
                                                                                                                    d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                                                                                                    fill="#000000" />
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                        <!--end::Svg Icon-->
                                                                                                    </span>
                                                                                                </div>
                                                                                                <!--end::Icon-->

                                                                                                <!--begin::Info-->
                                                                                                <div
                                                                                                    class="timeline-desc timeline-desc-light-danger">
                                                                                                    <span
                                                                                                        class="font-weight-bolder text-danger">Hesham
                                                                                                        7:05 PM</span>
                                                                                                    <p
                                                                                                        class="font-weight-normal text-dark-50 pt-1">
                                                                                                        To start a blog,
                                                                                                        think of a topic
                                                                                                        about and first
                                                                                                        brainstorm ways to
                                                                                                        write details
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!--end::Info-->
                                                                                            </div>
                                                                                            <!--end::Item-->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $doc1 + 4 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $doc1 + 4 @endphp">
                                                                                    <img alt="Pic"
                                                                                        src="assets/media/demos/demo1.png" />
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $doc2 + 5 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $doc2 + 5 @endphp">
                                                                                    <img alt="Pic"
                                                                                        src="assets/media/demos/demo2.png" />
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $doc3 + 6 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $doc3 + 6 @endphp">
                                                                                    <img alt="Pic"
                                                                                        src="assets/media/demos/demo3.png" />
                                                                                </div>
                                                                                <div class="tab-pane fade"
                                                                                    id="kt_tab_pane_5_ @php echo $note + 6 @endphp"
                                                                                    role="tabpanel"
                                                                                    aria-labelledby="kt_tab_pane_5_ @php echo $note + 6 @endphp">
                                                                                    <div class="timeline timeline-4">
                                                                                        <div class="timeline-bar"></div>
                                                                                        <div class="timeline-items">
                                                                                            <div
                                                                                                class="timeline-item timeline-item-left">
                                                                                                <div class="timeline-badge">
                                                                                                    <div class="bg-danger">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="timeline-label">
                                                                                                    <span
                                                                                                        class="text-primary font-weight-bold">Salih
                                                                                                        11:35 AM</span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="timeline-content">
                                                                                                    Hello
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-item timeline-item-right">
                                                                                                <div class="timeline-badge">
                                                                                                    <div class="bg-success">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="timeline-label text-primary">
                                                                                                    <span
                                                                                                        class="text-primary font-weight-bold">Alshoja
                                                                                                        2:20 PM</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="timeline-content">
                                                                                                    hai
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="timeline-item timeline-item-left">
                                                                                                <div class="timeline-badge">
                                                                                                    <div class="bg-danger">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="timeline-label">
                                                                                                    <span
                                                                                                        class="text-primary font-weight-bold">Hesham
                                                                                                        11:35 AM</span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="timeline-content">
                                                                                                    thats the reply note
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="card card-custom">
                                                                                        <div class="card-body">
                                                                                            <div class="form-group mb-1">
                                                                                                <label
                                                                                                    for="exampleTextarea">Reply
                                                                                                    Note <span
                                                                                                        class="text-danger">*</span></label>
                                                                                                <textarea
                                                                                                    class="form-control"
                                                                                                    id="exampleTextarea"
                                                                                                    rows="2"></textarea>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="form-group mb-1">
                                                                                                <button type="button"
                                                                                                    class="btn btn-danger font-weight-bold"
                                                                                                    data-dismiss="modal">Reply</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-light-primary font-weight-bold"
                                                                            data-dismiss="modal">Close</button>
                                                                        <!-- <button type="button" class="btn btn-primary font-weight-bold">Save changes</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Modal-->
                                                    @endfor

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_11_2">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-vertical-center">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-40px"></th>
                                                        <th class="p-0 min-w-200px"></th>
                                                        <th class="p-0 min-w-100px"></th>
                                                        <th class="p-0 min-w-125px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 py-4">
                                                            <div class="symbol symbol-50 symbol-light">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#"
                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR
                                                                Mobile Application</a>
                                                            <div>
                                                                <span class="font-weight-bolder">Email:</span>
                                                                <a class="text-muted font-weight-bold text-hover-primary"
                                                                    href="#">ktr@demo.com</a>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                            <span class="text-muted font-weight-bold">Paid</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="label label-lg label-light-warning label-inline">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                fill="#000000" />
                                                                            <path
                                                                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero" />
                                                                            <path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3" />
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
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_tab_pane_11_3" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_11_3">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-vertical-center">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-40px"></th>
                                                        <th class="p-0 min-w-200px"></th>
                                                        <th class="p-0 min-w-100px"></th>
                                                        <th class="p-0 min-w-125px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 py-4">
                                                            <div class="symbol symbol-50 symbol-light mr-1">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/006-plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#"
                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant
                                                                Outstanding</a>
                                                            <div>
                                                                <span class="font-weight-bolder">Email:</span>
                                                                <a class="text-muted font-weight-bold text-hover-primary"
                                                                    href="#">bprow@bnc.cc</a>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                            <span class="text-muted font-weight-bold">Paid</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span
                                                                class="label label-lg label-light-primary label-inline">Approved</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                fill="#000000" />
                                                                            <path
                                                                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero" />
                                                                            <path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3" />
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
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_tab_pane_11_4" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_11_4">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-vertical-center">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-40px"></th>
                                                        <th class="p-0 min-w-200px"></th>
                                                        <th class="p-0 min-w-100px"></th>
                                                        <th class="p-0 min-w-125px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 py-4">
                                                            <div class="symbol symbol-50 symbol-light mr-1">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/006-plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#"
                                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant
                                                                Outstanding</a>
                                                            <div>
                                                                <span class="font-weight-bolder">Email:</span>
                                                                <a class="text-muted font-weight-bold text-hover-primary"
                                                                    href="#">bprow@bnc.cc</a>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                            <span class="text-muted font-weight-bold">Paid</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span
                                                                class="label label-lg label-light-primary label-inline">Approved
                                                                inbox</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                fill="#000000" />
                                                                            <path
                                                                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero" />
                                                                            <path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3" />
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
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>

                    <!--begin::Modal-->
                </div>
                <!--end::Row-->
                <!--begin::Pagination-->
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-wrap mr-3">
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <select
                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                            style="width: 75px;">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-muted">Displaying 10 of 230 records</span>
                    </div>
                </div>
                <!--end::Pagination-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Card-->
    </div>
@endsection
<script>
    function addClass(active_link_id, type) {
        switch (type) {
            case "track_nav_item":
                var current = document.getElementById('track_nav_item' + active_link_id);
                var tabItem = document.getElementById('kt_tab_pane_5_' + active_link_id);

                break;
            case "note_nav_item":
                var current = document.getElementById('note_nav_item' + active_link_id);
                var tabItem = document.getElementById('kt_tab_pane_5_' + active_link_id);

                break;
            case "profile_nav_item":
                var current = document.getElementById('profile_nav_item' + active_link_id);
                var tabItem = document.getElementById('kt_tab_pane_5_' + active_link_id);

        }
        // current.classList.add('active');

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            console.log('tab view tog', e.target);
            e.target // newly activated tab
            e.relatedTarget // previous active tab
        })
    }

</script>
@push('script')
    <script src="assets/js/pages/crud/ktdatatable/base/data-json.js"></script>

@endpush

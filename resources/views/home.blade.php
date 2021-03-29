@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">

                <div class="col-lg-6 col-xxl-4">
                    <!--begin::Stats Widget 11-->
                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                <span class="symbol symbol-50 symbol-light-success mr-2">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-xl svg-icon-success">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-right">
                                    <span
                                        class="text-dark-75 font-weight-bolder font-size-h3">{{ $dashData->profileEntered }}</span>
                                    <span class="text-muted font-weight-bold mt-2">My Profiles</span>
                                </div>
                            </div>
                            <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success"
                                style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 11-->
                    <!--begin::Stats Widget 12-->
                    @if (Auth::user()->role != 'employ')
                        <div class="card card-custom card-stretch card-stretch-half gutter-b">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                    <span class="symbol symbol-50 symbol-light-primary mr-2">
                                        <span class="symbol-label">
                                            <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="d-flex flex-column text-right">
                                        <span
                                            class="text-dark-75 font-weight-bolder font-size-h3">{{ $dashData->usersCount }}</span>
                                        <span class="text-muted font-weight-bold mt-2">My Users</span>
                                    </div>
                                </div>
                                <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary"
                                    style="height: 150px"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                    @endif

                    <!--end::Stats Widget 12-->
                </div>

                <div class="col-lg-6 col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Activity</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Last Profile Activity</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-6 mt-3">
                                <!--begin::Item-->
                                @foreach ($dashData->activity as $item)
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                            {{ date('h:i', strtotime($item->created_at)) }}</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless @if ($item->is_note ==
                                                'null') text-warning @endif
                                                @if ($item->is_approved != 'null')
                                                    text-success
                                                @else
                                                    text-danger
                                                    @endif icon-xl">
                                            </i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="font-weight-normal font-size-lg timeline-content  @if ($item->is_note == 'null') text-dark-75
                                        font-weight-bolder @else text-muted @endif
                                            pl-3">
                                            {{ $item->note }}</div>
                                        <!--end::Text-->
                                    </div>
                                @endforeach
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 9-->
                </div>

                <div class="col-lg-6 col-xxl-4">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title font-weight-bolder text-white">Analytics</h3>
                            <div class="card-toolbar">

                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 position-relative overflow-hidden">
                            <!--begin::Chart-->
                            <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px">
                            </div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-spacer mt-n25">
                                <!--begin::Row-->
                                <div class="row m-0">
                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <p class="text-warning font-weight-bold font-size-h6 mt-2">
                                                {{ $dashData->profileEntered }}</p>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-warning font-weight-bold font-size-h6">Profile
                                            Entered</a>
                                    </div>
                                    <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                            <p class="text-info font-weight-bold font-size-h6 mt-2">
                                                {{ $dashData->usersCount }}</p>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2"> Users</a>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <p class="text-danger font-weight-bold font-size-h6 mt-2">
                                                {{ $dashData->profileApproved }}</p>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Approved
                                            Profiles</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                            <p class="text-success font-weight-bold font-size-h6 mt-2">
                                                {{ $dashData->profilePending }}</p>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Profile
                                            Pending</a>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>

                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Advance Table Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Recent Profiles</span>
                                <!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> -->
                            </h3>
                            {{-- <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#"
                                        class="btn btn-danger btn-gradient-danger btn-sm font-weight-bolder dropdown-toggle px-5"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <!-- <li class="navi-header pb-1">
                                                               <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                                new:</span>
                                                              </li> -->
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">Excell</span>
                                                </a>
                                            </li>
                                            <!-- <li class="navi-item">
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
                                                              </li> -->
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-3">
                            <div class="tab-content">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table
                                        class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                        <thead>
                                            <tr class="text-left text-uppercase">
                                                <th style="min-width: 250px" class="pl-7">
                                                    <!-- <span class="text-dark-75">Name</span> -->
                                                    Name
                                                </th>
                                                <th style="min-width: 100px">Gender</th>
                                                <th style="min-width: 100px">Country</th>
                                                <!-- <th style="min-width: 100px">company</th>
                                                                                                                     <th style="min-width: 130px">rating</th> -->
                                                <th style="min-width: 80px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dashData->profileList as $item)

                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/avatars/001-boy.svg"
                                                                        class="h-75 align-self-end" alt="" />
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="#"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                                                    {{ $item->name }}</a>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block">{{ $item->citizen_location }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-dark-75 text-capitalize font-weight-bolder d-block font-size-lg">{{ $item->gender }}</span>
                                                        <!-- <span class="text-muted font-weight-bold">In Proccess</span> -->
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                            {{ $item->nationality }}</span>
                                                        <!-- <span class="text-muted font-weight-bold">Paid</span> -->
                                                    </td>
                                                    <td class="pr-0 text-right">
                                                        <a href="edit-profile.php"
                                                            class="btn btn-success btn-gradient-success  font-weight-bolder font-size-sm">More</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 4-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->

            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- <script src="assets/js/pages/crud/ktdatatable/base/data-json.js"></script> --}}

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
        current.classList.add('active');

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            console.log('tab view tog', e.target);
            e.target // newly activated tab
            e.relatedTarget // previous active tab
        })
    }

</script>

<script>
    var chartSettings = {
        profile: {
            data: [{{ implode(',', $dashData->profile) }}],
            name: 'Profiles',
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            count: 66
        },
        users: {
            data: [{{ implode(',', $dashData->users) }}],
            name: 'Users',
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            count: 46

        },
        analytics: {
            data: [{{ implode(',', $dashData->analytics) }}],
            name: '',
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        }
    };

</script>

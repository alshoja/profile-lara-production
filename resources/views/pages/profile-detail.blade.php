@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin::Top-->
                    <div class="d-flex">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img alt="Pic" src="{{ asset("/{$user->image}") }}" />
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                <!--begin::User-->
                                <div class="mr-3">
                                    <!--begin::Name-->
                                    <a href="#"
                                        class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                        {{ $user->name }}

                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                    <!--end::Name-->
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#"
                                            class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
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
                                            </span>{{ $user->email }}</a>
                                        <a href="#"
                                            class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <mask fill="white">
                                                            <use xlink:href="#path-1" />
                                                        </mask>
                                                        <g />
                                                        <path
                                                            d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>{{ ucwords(str_replace('_', ' ', $user->role)) }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>{{ $user->contact }}</a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <!-- <div class="my-lg-0 my-1">
                                                                                                                                                                                                                        <a href="#" class="btn btn-sm btn-success font-weight-bolder text-uppercase">Show More</a>
                                                                                                                                                                                                                    </div> -->
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->

                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Separator-->
                    <div class="separator separator-solid my-7"></div>
                    <!--end::Separator-->
                    <!--begin::Bottom-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            @if (request()->query('role') != 'employ')
                                {{-- <span class="mr-4">
                                    <i class="flaticon-map icon-2x text-muted font-weight-bold"></i>
                                </span> --}}
                                <div class="d-flex flex-column text-dark-75">
                                    {{-- <span class="font-weight-bolder font-size-sm">Departments</span> --}}
                                    <span class="font-weight-bolder font-size-h5">
                                        {{-- <span class="text-dark-50 font-weight-bold"></span>249,500</span> --}}
                                </div>
                            @endif

                        </div>

                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            @if (request()->query('role') != 'employ')
                                {{-- <span class="mr-4">
                                    <i class="flaticon-avatar icon-2x text-muted font-weight-bold"></i>
                                </span> --}}
                                <div class="d-flex flex-column text-dark-75">
                                    {{-- <span class="font-weight-bolder font-size-sm">Directors</span> --}}
                                    <span class="font-weight-bolder font-size-h5">
                                        {{-- <span class="text-dark-50 font-weight-bold">$</span>164,700</span> --}}
                                </div>
                            @endif

                        </div>

                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <div class="d-flex flex-column flex-lg-fill">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">Can Add User</span>
                                <span class="switch switch-outline switch-icon switch-success">
                                    <label>
                                        <input type="checkbox" disabled="disabled" @if ($user->can_add_user) checked="checked" @endif name="select" />
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <!-- <span class="mr-5">
                                                                                                                                                                                               <i class="flaticon-user icon-2x text-muted font-weight-bold"></i>
                                                                                                                                                              </span> -->
                            <div class="d-flex flex-column flex-lg-fill">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">User Suspended</span>
                                <!-- <a href="#" class="text-primary font-weight-bolder">No</a> -->
                                <span class="switch switch-outline switch-icon switch-danger">
                                    <label>
                                        <input type="checkbox" disabled="disabled" @if ($user->suspended) checked="checked" @endif name="select" />
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <!--end: Item-->

                    </div>
                    <!--end::Bottom-->
                </div>
            </div>
            <!--end::Card-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Advance Table Widget 2-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">{{ $user->name }}</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage users and Account </span>
                                @foreach ($errors->all() as $error)
                                    <span class="text-danger mt-3 font-weight-bold font-size-sm">{{ $error }}</span>
                                @endforeach
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    @if (request()->query('role') != 'employ')
                                        @if (Auth::user()->id != Request::segment(3))
                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4" data-toggle="tab"
                                                    href="#kt_tab_pane_11_2">{{ $user->name }}'s Users
                                                </a>
                                            </li>
                                        @endif
                                    @endif
                                    @if (Auth::user()->id == Request::segment(3))
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_4">Change
                                                Password</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_4">Change
                                                {{ $user->name }}'s Password</a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                            href="#kt_tab_pane_11_3">Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="tab-content mt-5" id="myTabTables11">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_11_4" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_11_1">
                                    <!--begin::Table-->
                                    <form class="form" action="{{ url('account/change/password') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>Current Password</label>
                                                    <input type="password" name="current_password" class="form-control"
                                                        placeholder="Password" />
                                                    <input type="hidden" value="{{ $user->id }}" name="id">
                                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>Password</label>
                                                    <input type="password" name="new_password" class="form-control"
                                                        placeholder="Confirm Password" />
                                                    <!-- <span class="form-text text-danger">Confirm password does not match</span> -->
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>Confirm Password</label>
                                                    <input type="text" name="confirm_password" class="form-control"
                                                        placeholder="Confirm Password" />
                                                    <!-- <span class="form-text text-danger">Confirm password does not match</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="submit" value="Change Password"
                                                        class="btn btn-primary btn-gradient-danger mr-2">
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                                @if ($user->role != 'employ')
                                                    @forelse ($user->assets as $item)
                                                        <tr>
                                                            <td class="pl-0 py-4">
                                                                <div class="symbol symbol-50 symbol-light">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ url('assets/media/svg/avatars/001-boy.svg') }}"
                                                                            class="h-50 align-self-center" alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="{{ url('user/profile-detail/' . $item->subusers->id) }}?role={{ $item->subusers->role }}"
                                                                    class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $item->subusers->name }}</a>
                                                                <div>
                                                                    {{-- <span class="font-weight-bolder">Email:</span> --}}
                                                                    <a class="text-muted font-weight-bold text-hover-primary"
                                                                        href="#">{{ $item->subusers->email }}</a>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="text-muted font-weight-500">{{ $item->subusers->contact }}</span>
                                                            </td>
                                                            <td class="text-right">
                                                                <span
                                                                    class="label label-lg label-light-warning label-inline">{{ ucwords(str_replace('_', ' ', $item->subusers->role)) }}</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                @if (Auth::user()->update)
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
                                                                @endif
                                                                @if (Auth::user()->update)

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
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td>
                                                                No data
                                                            </td>
                                                        </tr>
                                                @endforelse

                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_11_3">
                                    <form class="form" method="POST" enctype="multipart/form-data"
                                        action="{{ url('update/user/' . $user->id) }}">
                                        @csrf
                                        {{-- @method('PUT') --}}
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label>Full Name</label>
                                                    <input type="text" value="{{ $user->name }}" name="name"
                                                        class="form-control" placeholder="Enter full name" />
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>Email</label>
                                                    <input readonly type="email" value="{{ $user->email }}" name="email"
                                                        class="form-control" placeholder="Enter username or email" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>Contact</label>
                                                    <input type="number" value="{{ $user->contact }}" name="contact"
                                                        class="form-control" placeholder="Contact Number" />

                                                    <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                                                </div>
                                            </div>
                                            @if (Auth::user()->id != Request::segment(3))
                                                <div class="separator separator-dashed my-10"></div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2">
                                                        <label class="col col-form-label">Suspend User</label>
                                                        <div class="col-3">
                                                            <span class="switch switch-outline switch-icon switch-danger">
                                                                <label>
                                                                    <input type="checkbox" value="1" @if ($user->suspended) checked="checked" @endif name="suspended" />
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="col col-form-label">Can add User</label>
                                                        <div class="col-3">
                                                            <span class="switch switch-outline switch-icon switch-success">
                                                                <label>
                                                                    <input type="checkbox" value="1" @if ($user->can_add_user) checked="checked" @endif name="can_add_user" />
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2">
                                                        <label class="col col-form-label">Create</label>
                                                        <div class="col-3">
                                                            <span class="switch switch-outline switch-icon switch-primary">
                                                                <label>
                                                                    <input type="checkbox" @if ($user->create) checked="checked" @endif value="1" name="create" />
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="col col-form-label">Edit</label>
                                                        <div class="col-3">
                                                            <span class="switch switch-outline switch-icon switch-warning">
                                                                <label>
                                                                    <input type="checkbox" @if ($user->update) checked="checked" @endif value="1" name="update" />
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="col col-form-label">Delete</label>
                                                        <div class="col-3">
                                                            <span class="switch switch-outline switch-icon switch-danger">
                                                                <label>
                                                                    <input type="checkbox" @if ($user->delete) checked="checked" @endif value="1" name="delete" />
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif

                                            <div class="separator separator-dashed my-10"></div>

                                            <div class="row form-group">
                                                <div class="col-md-2">
                                                    <div class="image-input image-input-empty image-input-outline"
                                                        id="kt_image_1"
                                                        style="background-image: url({{ asset($user->image) }})">
                                                        <div class="image-input-wrapper"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Remove avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Profile Picture</span>

                                                    @error('image')
                                                        <span class="form-text text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="image-input image-input-empty image-input-outline"
                                                        id="kt_image_2"
                                                        style="background-image: url({{ asset($user->sign) }})">
                                                        <div class="image-input-wrapper"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="sign" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Remove avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Sign</span>
                                                    @error('sign')
                                                        <span class="form-text text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="submit" value="Save"
                                                        class="btn btn-primary mr-2 btn-gradient-success">
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 2-->
                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@push('script')
    <script src="assets/js/pages/widgets.js"></script>
    <script>
        function toggleDepartment(role) {
            changeColor(role);

            var mainDiv = document.getElementById("group-row");
            var departmentDiv = document.getElementById("department-row");
            var gdDiv = document.getElementById("gd-row");
            var DirectorDiv = document.getElementById("director-row");
            var dhDiv = document.getElementById("dh-row");
            var superDiv = document.getElementById("super-row");


            switch (role) {
                case "admin":
                    mainDiv.classList.add("d-none");
                    break;
                case "gd":
                    mainDiv.classList.remove("d-none");
                    departmentDiv.classList.remove("d-none");
                    gdDiv.classList.add("d-none");
                    DirectorDiv.classList.add("d-none");
                    dhDiv.classList.add("d-none");
                    superDiv.classList.add("d-none");
                    break;
                case "director":
                    mainDiv.classList.remove("d-none");
                    departmentDiv.classList.remove("d-none")
                    gdDiv.classList.remove("d-none");
                    DirectorDiv.classList.add("d-none");
                    dhDiv.classList.add("d-none");
                    superDiv.classList.add("d-none");
                    break;
                case "dh":
                    mainDiv.classList.remove("d-none");
                    departmentDiv.classList.remove("d-none")
                    gdDiv.classList.remove("d-none");
                    DirectorDiv.classList.remove("d-none");
                    dhDiv.classList.add("d-none");
                    superDiv.classList.add("d-none");
                    break;
                case "super":
                    mainDiv.classList.remove("d-none");
                    departmentDiv.classList.remove("d-none")
                    gdDiv.classList.remove("d-none");
                    DirectorDiv.classList.remove("d-none");
                    dhDiv.classList.remove("d-none");
                    superDiv.classList.add("d-none");
                    break;
                case "employ":
                    mainDiv.classList.remove("d-none");
                    departmentDiv.classList.remove("d-none")
                    gdDiv.classList.remove("d-none");
                    DirectorDiv.classList.remove("d-none");
                    dhDiv.classList.remove("d-none");
                    superDiv.classList.remove("d-none");
                    break;
            }
        }

        function changeColor(role) {
            var admin = document.getElementById("admin-label");
            var gd = document.getElementById("gd-label");
            var director = document.getElementById("director-label");
            var dh = document.getElementById("dh-label");
            var supervisor = document.getElementById("supervisor-label");
            var employ = document.getElementById("employ-label");

            switch (role) {
                case "admin":
                    admin.classList.add('text-primary');
                    gd.classList.remove('text-primary');
                    director.classList.remove('text-primary');
                    dh.classList.remove('text-primary');
                    supervisor.classList.remove('text-primary');
                    employ.classList.remove('text-primary');
                    break;
                case "gd":
                    gd.classList.add('text-primary');
                    director.classList.remove('text-primary');
                    dh.classList.remove('text-primary');
                    supervisor.classList.remove('text-primary');
                    employ.classList.remove('text-primary');
                    admin.classList.remove('text-primary');
                    break;
                case "director":
                    director.classList.add('text-primary');
                    gd.classList.remove('text-primary');
                    dh.classList.remove('text-primary');
                    supervisor.classList.remove('text-primary');
                    employ.classList.remove('text-primary');
                    admin.classList.remove('text-primary');
                    break;
                case "dh":
                    dh.classList.add('text-primary');
                    gd.classList.remove('text-primary');
                    director.classList.remove('text-primary');
                    supervisor.classList.remove('text-primary');
                    employ.classList.remove('text-primary');
                    admin.classList.remove('text-primary');
                    break;
                case "super":
                    supervisor.classList.add('text-primary');
                    gd.classList.remove('text-primary');
                    director.classList.remove('text-primary');
                    dh.classList.remove('text-primary');
                    employ.classList.remove('text-primary');
                    admin.classList.remove('text-primary');
                    break;
                case "employ":
                    employ.classList.add('text-primary');
                    gd.classList.remove('text-primary');
                    director.classList.remove('text-primary');
                    dh.classList.remove('text-primary');
                    supervisor.classList.remove('text-primary');
                    admin.classList.remove('text-primary');
                    break;
            }
        }

    </script>
@endpush

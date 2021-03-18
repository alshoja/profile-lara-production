@extends('layouts.app')
@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            @foreach ($users as $user)
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
                                        <a href="profile-detail.php"
                                            class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $user->name }}
                                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                                                r="2.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>{{ $user->email }}</a>
                                            <a href="#"
                                                class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
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
                                                </span>{{strtoupper($user->role) }}</a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
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
                                    <div class="my-lg-0 my-1">
                                        <a href="{{ url('/profile-detail/' . $user->id) }}"
                                            class="btn btn-sm btn-success btn-gradient-success font-weight-bolder text-uppercase">
                                            More</a>
                                        {{-- <a href="{{ url('/user/' . $user->id) }}"
                                            class="btn btn-sm btn-danger btn-gradient-danger font-weight-bolder text-uppercase">Delete</a> --}}

                                        <a class="btn btn-sm btn-danger btn-gradient-danger font-weight-bolder" href="javascript:void(0);" onclick="$(this).find('form').submit();">
                                           Delete
                                           <form style="display: none" action="{{ url('/user/' . $user->id) }}" method="post">
                                            @method('delete')
                                            @csrf()
                                        </form>
                                        </a>
                                       
                                    </div>

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
                                <span class="mr-4">
                                    <i class="flaticon-map icon-2x text-muted font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">Departments</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold"></span>249,500</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <span class="mr-4">
                                    <i class="flaticon-avatar icon-2x text-muted font-weight-bold"></i>
                                </span>
                                <div class="d-flex flex-column text-dark-75">
                                    <span class="font-weight-bolder font-size-sm">Directors</span>
                                    <span class="font-weight-bolder font-size-h5">
                                        <span class="text-dark-50 font-weight-bold">$</span>164,700</span>
                                </div>
                            </div>
                            <!--end: Item-->
                            <!--begin: Item-->
                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                <div class="d-flex flex-column flex-lg-fill">
                                    <span class="text-dark-75 font-weight-bolder font-size-sm">Can Add User</span>
                                    <span class="switch switch-outline switch-icon switch-success">
                                        <label>
                                            <input disabled="disabled" type="checkbox" @if ($user->can_add_user) checked="checked" @endif name="select" />
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
            @endforeach
            {{-- @php 	} @endphp --}}
            <!--end::Card-->
            <!--begin::Pagination-->
            <div class="card card-custom">
                <div class="card-body py-7">
                    <!--begin::Pagination-->
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex flex-wrap mr-3">
            {{ $users->links() }}

                            {{-- <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
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
                            </a> --}}
                        </div>
                        {{-- <div class="d-flex align-items-center">
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
                        </div> --}}
                    </div>
                    <!--end:: Pagination-->
                </div>
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection

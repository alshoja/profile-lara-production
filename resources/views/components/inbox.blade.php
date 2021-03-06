<div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
    <!--begin::Table-->
    <div class="table-responsive">
        <table class="table table-head-custom table-vertical-center">
            <thead>
                <tr class="text-left text-uppercase">
                    <th class="pr-0" style="width: 50px">ID</th>
                    <th class="pr-0" style="width: 50px">created</th>
                    <th class="pr-0" style="width: 50px">author</th>
                    <th class="pr-0" style="min-width: 120px"></th>
                    <th class="pr-0" style="min-width: 120px">nationality</th>
                    <th class="pr-0" style="min-width: 150px">product</th>
                    <th class="pr-0" style="min-width: 150px">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $item)
                    <tr>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                {{ $item->id }}</a>
                        </td>
                        <td class="pl-0">
                            <span class="text-muted text-capitalize font-weight-bold text-muted d-block">
                                {{ date('Y-m-d ', strtotime($item->created_at)) }}</span>
                        </td>
                        <td class="pl-0">
                            <div class="symbol symbol-50 symbol-light mt-1">
                                <span class="symbol-label">
                                    @if ($item->gender == 'male')
                                        <img src="{{ url('assets/media/svg/avatars/001-boy.svg') }}"
                                            class="h-75 align-self-end" alt="" />

                                    @else
                                        <img src="{{ url('assets/media/svg/avatars/002-girl.svg') }}"
                                            class="h-75 align-self-end" alt="" />
                                    @endif
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" onclick="getProfileData({{ $item->id }})" data-toggle="modal"
                                data-target="#exampleModalSizeXl"
                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                {{ $item->name }}</a>
                            <span
                                class="text-muted text-capitalize font-weight-bold text-muted d-block">{{ $item->name_arabic }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                {{ $item->nationality }}</span>
                            <span class="text-muted font-weight-bold text-capitalize">
                                {{ $item->gender }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 text-capitalize font-weight-bolder d-block font-size-lg">
                                {{ $item->product_type }} </span>
                            {{-- <span
                            class="text-muted font-weight-bold">{{ $item->shipping_no }}</span> --}}
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 mr-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="text-muted mr-2 font-size-sm font-weight-bold">
                                        {{ calculatePercenteage($item) }}%
                                    </span>
                                    <span class="text-muted font-size-sm font-weight-bold">Progress
                                    </span>
                                </div>
                                <div class="progress progress-xs w-100">
                                    <div class="progress-bar @if (calculatePercenteage($item)
                                        <=30) bg-danger @endif @if (calculatePercenteage($item) == 100)
                                        bg-success
                                    @else bg-warning @endif "
                                        role="progressbar" style="width:
                                        {{ calculatePercenteage($item) }}%;"
                                        aria-valuenow="10" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </td>
                        @if (request()->query('tab') != 'pending')
                            <td class="text-right pr-0">
                                @if (Auth::user()->role == 'supervisor' || Auth::user()->role == 'employ')
                                    @if ($item->on_final_approval == 1)
                                        <a data-toggle="modal" data-target="#final_documents{{ $item->id }}"
                                            href="#" class="btn btn-icon btn-light btn-hover-success btn-sm mx-3">
                                            <span data-toggle="tooltip" title="Upload final documents"
                                                class="svg-icon svg-icon-md svg-icon-success">
                                                <img src="{{ url('assets/media/svg/upload.gif') }}"
                                                    class="h-75 align-self-end" alt="" />
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    @endif
                                @endif
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="btn btn-icon btn-light btn-hover-success btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header pb-1">
                                            <span
                                                class="text-primary text-uppercase font-weight-bold font-size-sm">Options</span>
                                        </li>
                                        @if ($item->is_completed == 1)
                                            @if (Auth::user()->role == 'employ')
                                                <li class="navi-item">
                                                    <a onclick="alertAndGoToUrl('/forward/new/{{ $item->id }}','Forward or Duplicate this Profile ?')"
                                                        href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-reply"></i>
                                                        </span>
                                                        <span class="navi-text">Forward
                                                            as
                                                            New</span>
                                                    </a>
                                                </li>
                                            @endif

                                            <li class="navi-item">
                                                <a target="_blank" href="{{ url('profile/pdf', $item->id) }}"
                                                    href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-document"></i>
                                                    </span>
                                                    <span class="navi-text">Export
                                                        PDF</span>
                                                </a>
                                            </li>
                                        @endif

                                        @if (request()->query('tab') == 'inbox')
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon-speech-bubble"></i>
                                                    </span>
                                                    <span onclick="getProfileData({{ $item->id }})"
                                                        data-toggle="modal" data-target="#exampleModalSizeXl"
                                                        class="navi-text">Reply to
                                                        note</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon-placeholder-3"></i>
                                                    </span>
                                                    <span onclick="getProfileData({{ $item->id }})"
                                                        data-toggle="modal" data-target="#exampleModalSizeXl"
                                                        class="navi-text">Track</span>
                                                </a>
                                            </li>
                                        @endif
                                        @if (request()->query('tab') == 'drafts')
                                            <li class="navi-item">
                                                <a href="{{ url('profile/submit/draft', $item->id) }}"
                                                    class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon-paper-plane"></i>
                                                    </span>
                                                    <span class="navi-text">Submit
                                                        Draft</span>
                                                </a>
                                            </li>
                                        @endif
                                        @if (request()->query('tab') == 'inbox')
                                            @if (Auth::user()->role == 'employ')
                                                <li class="navi-item">
                                                    <a href="{{ url('profile/resubmit', $item->id) }}"
                                                        class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon-paper-plane"></i>
                                                        </span>
                                                        <span class="navi-text">Resubmit</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endif
                                    </ul>
                                    <!--end::Navigation-->
                                </div>

                                @if (Auth::user()->update)
                                    @if (Auth::user()->role == 'employ')
                                        @if (request()->query('tab') == 'inbox' || request()->query('tab') == 'drafts')
                                            <a href="{{ url('profile/edit', $item->id) }}"
                                                class="btn btn-icon btn-light btn-hover-success btn-sm mx-3">
                                                <span class="svg-icon svg-icon-md svg-icon-success">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
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
                                            </a>
                                        @endif
                                    @endif
                                @endif

                                @if (Auth::user()->delete && $item->is_completed == 0)
                                    @if (Auth::user()->role != 'employ')
                                        <a onclick="alertAndGoToUrl('/profile/delete/{{ $item->id }}','delete ? {{ $item->name }}')"
                                            href="#" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-danger">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                @endif
                            </td>
                        @endif
                        <input type="hidden" id="profile_id">
                    </tr>
                    <div class="modal fade" id="final_documents{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="final" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Final Documents</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <form onsubmit="return confirm('Do you confirm ?');" action="{{ url('profile/document/update', $item->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <!--begin::Form-->
                                        @csrf
                                        <div class="card-body">
                                            @if ($item->scanned_document4 == '')
                                                <div class="form-group">
                                                    <label>Doc 1</label>
                                                    <input type="text" id="editingid" name="editingid" hidden>
                                                    <input name="scanned_document4" id="scanned_document4" type="file"
                                                        class="form-control form-control-solid" placeholder="Name" />
                                                </div>
                                            @else
                                                <input name="scanned_documents4" type="text" hidden
                                                    value="{{ $item->scanned_document4 }}">
                                            @endif

                                            @if ($item->scanned_document5 == '')
                                                <div class="form-group">
                                                    <label>Doc 2</label>
                                                    <input name="scanned_document5" id="scanned_document5" type="file"
                                                        class="form-control form-control-solid" placeholder="Name" />
                                                </div>
                                            @else
                                                <input name="scanned_documents5" type="text" hidden
                                                    value="{{ $item->scanned_document5 }}">
                                            @endif


                                            @if ($item->scanned_document6 == '')
                                                <div class="form-group">
                                                    <label>Doc 3</label>
                                                    <input name="scanned_document6" id="scanned_document6" type="file"
                                                        class="form-control form-control-solid" placeholder="Name" />
                                                </div>
                                            @else
                                                <input name="scanned_documents6" type="text" hidden
                                                    value="{{ $item->scanned_document6 }}">
                                            @endif


                                            @if ($item->scanned_document7 == '')
                                                <div class="form-group">
                                                    <label>Doc 4</label>
                                                    <input name="scanned_document7" id="scanned_document7" type="file"
                                                        class="form-control form-control-solid" placeholder="Name" />
                                                </div>
                                            @else
                                                <input name="scanned_documents7" type="text" hidden
                                                    value="{{ $item->scanned_document7 }}">
                                            @endif

                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" id="submit" class="btn btn-primary mr-2">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Navigation-->
    </div>
    @endforeach
    @if (count($profiles) < 1)
        <tr>
            <td class="pl-0">
                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Oops..!
                    Nothing Found</a>
                {{-- <span
                            class="text-muted font-weight-bold text-muted d-block">No
                            Profiles</span> --}}
            </td>
        <tr>
    @endif
    </tbody>
    </table>
    <!-- Modal-->

    <div class="modal fade" id="exampleModalSizeXl" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal
                        Title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-toolbar">
                            <ul class="nav nav-light-danger nav-bold nav-pills">
                                <li class="nav-item">
                                    <a id="profile_nav_item" class="nav-link active" data-toggle="tab"
                                        href="#kt_tab_pane_5_e">
                                        <span class="nav-icon"><i class="flaticon-businesswoman"></i></span>
                                        <span class="nav-text">E-Profile</span>
                                    </a>
                                </li>
                                @if (Auth::user()->role != 'employ')
                                    @if (Auth::user()->role != 'admin')
                                        @if (request()->query('tab') != 'completed')
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_de">
                                                    <span class="nav-icon"><i class="flaticon-information"></i></span>
                                                    <span class="nav-text">Decision</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endif
                                @endif

                                {{-- some kind of comment --}}
                                {{-- {lksdjalksjdkljasd} --}}

                                <li onclick="showReply(false)" class="nav-item">
                                    <a id="track_nav_item" class="nav-link" data-toggle="tab"
                                        href="#kt_tab_pane_5_track">
                                        <span class="nav-icon"><i class="flaticon-placeholder-3"></i></span>
                                        <span class="nav-text">Track</span>
                                    </a>
                                </li>
                                <li onclick="showReply(false)" class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="nav-icon"><i class="flaticon-profile"></i></span>
                                        <span class="nav-text">Documents</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_doc1">Primary
                                            Documents</a>
                                        <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_doc2">Final
                                            Documents</a>
                                        {{-- <a class="dropdown-item" data-toggle="tab"
                                        href="#kt_tab_pane_5_doc3">Doc-3</a> --}}
                                    </div>
                                </li>
                                <li onclick="showReply(true)" class="nav-item">
                                    <a id="note_nav_item" class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_note">
                                        <span class="nav-icon"><i class="flaticon-speech-bubble-1"></i></span>
                                        <span class="nav-text">Notes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_5_e" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_e">
                                <!-- code-->
                                <div class="justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                    <div class="col-xl-12">
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            {{-- <h6 class="text-success"><small><?php echo date('l'); ?>&nbsp;,<?php echo date('d-Y'); ?>&nbsp;Time:<?php echo date('h:i:sa'); ?></small>
                                        </h6> --}}
                                            <br>

                                            <div class="form-group row">
                                                <div class="col-xl-6">
                                                    <label class="text-muted font-size-sm">
                                                        Name Arabic</label>
                                                    <p id="name_arabic"
                                                        class="text-secondary font-weight-lighter font-size-sm">
                                                    </p>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="text-muted font-size-sm">
                                                        Name English</label>
                                                    <p id="name"
                                                        class="text-secondary font-weight-lighter font-size-sm">
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Nationality</label>
                                                        <p id="nationality"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Gender</label>
                                                        <p id="gender"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">DOB</label>
                                                        <p id="dob"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Place
                                                            of Birth
                                                        </label>
                                                        <p id="place_birth"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Address
                                                        </label>
                                                        <p id="address"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Referal
                                                            Name
                                                        </label>
                                                        <p id="referal_name"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Product
                                                            Type
                                                        </label>
                                                        <p id="product_type"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Passport
                                                            Number</label>
                                                        <p id="passport_no"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Passport
                                                            Type</label>
                                                        <p id="passport_type"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Passport
                                                            Issue</label>
                                                        <p id="passport_issue"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Date
                                                            of
                                                            Issue</label>
                                                        <p id="date_issue"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Residency
                                                        </label>
                                                        <p id="residency"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Location
                                                        </label>
                                                        <p id="location"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">passport
                                                            Expiry Date
                                                        </label>
                                                        <p id="date_expiry"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">UID
                                                            Number
                                                        </label>
                                                        <p id="uid"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                                <div class="col-xl-4">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Proffession
                                                        </label>
                                                        <p id="proffession"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>


                                                    </div>
                                                    <!--end::Select-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row  justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                    <div class="col-xl-12 ">
                                        <div class="pb-5">
                                            <div class="border-bottom">

                                                <h3>INVENTORY DATA</h3>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Inventory
                                                            Name
                                                        </label>
                                                        <p id="inventory_name"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Inventory
                                                            Codes
                                                        </label>
                                                        <p id="inventory_codes"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-9">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Notes

                                                        </label>
                                                        <p id="note"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Inventory
                                                            Details

                                                        </label>
                                                        <p id="inventory_detials"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div style="display: none" class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Inventory
                                                            Data
                                                        </label>
                                                        <p id="inventory_data"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                    <div class="col-xl-12 ">
                                        <div class="pb-5">
                                            <div class="border-bottom">
                                                <h3>Scanned Document</h3>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-xl-4" id="scan1">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 1</label>
                                                        <p>
                                                            <a id="scanned_document1" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="scan2">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 2</label>
                                                        <p>
                                                            <a id="scanned_document2" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="scan3">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 3</label>
                                                        <p>
                                                            <a id="scanned_document3" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="pb-5">
                                            <div class="border-bottom">
                                                <h3>Final Document</h3>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-xl-3" id="scan4">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 4</label>
                                                        <p>
                                                            <a id="scanned_documents4" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3" id="scan5">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 5</label>
                                                        <p>
                                                            <a id="scanned_documents5" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3" id="scan6">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 6</label>
                                                        <p>
                                                            <a id="scanned_documents6" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3" id="scan7">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">Scanned
                                                            Document 7</label>
                                                        <p>
                                                            <a id="scanned_documents7" href="" target="_blank"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                    height="25%" fill="currentColor"
                                                                    class="bi bi-file-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                    <path
                                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                </svg></a>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="pb-5">
                                            <div class="border-bottom">

                                                <h3>LABEL TITLE HERE</h3>
                                            </div>
                                            </br>
                                            <div class="form-group row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">
                                                            Department</label>
                                                        <p id="depart"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="text-muted font-size-sm">
                                                            Section</label>
                                                        <p id="section"
                                                            class="text-secondary font-weight-lighter font-size-sm">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- code end -->

                            </div>

                            <div class="tab-pane fade" id="kt_tab_pane_5_de" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_de">

                                {{-- <div class="card card-custom mb-2"> --}}
                                <form action="">
                                    <div
                                        class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">

                                        @if (request()->query('tab') == 'inbox')
                                            <div class="d-flex flex-column mr-5">
                                                <div class="ml-4 ml-lg-0 ml-xxl-4 flex-shrink-0">
                                                    <button onclick="AproveOrReject('signed')" id="approve"
                                                        type="button" value="Sign & Approve"
                                                        class="btn btn-sm  text-uppercase btn-success">
                                                        Sign
                                                    </button>
                                                    <button onclick="AproveOrReject('rejected')" id="reject"
                                                        type="button"
                                                        class="btn btn-sm  text-uppercase btn-danger ">Reject
                                                    </button>
                                                    <img style="width: 10%;" id="sign_img"
                                                        src="{{ url(Auth::user()->sign) }}">
                                                </div>
                                            </div>
                                        @else
                                            <div> <img style="width: 10%;" id="sign_img"
                                                    src="{{ url(Auth::user()->sign) }}">
                                                @if (request()->query('tab') == 'pending')
                                                    <span id="title" class="d-inline-block" data-toggle="tooltip"
                                                        title="x">
                                                        <h6 id="verfied"
                                                            class="btn btn-hover-transparent-success font-weight-bold mr-2"
                                                            style="pointer-events: none;" type="button" disabled>
                                                            <span
                                                                class="text-uppercase">{{ Auth::user()->role }}</span>
                                                            Verified
                                                        </h6>
                                                    </span>
                                                @endif

                                            </div>

                                        @endif
                                    </div>
                                </form>
                                {{-- </div> --}}
                            </div>

                            <div class="tab-pane fade" id="kt_tab_pane_5_track" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_track">

                                <div style="margin-right: 80px;" class="timeline timeline-5">
                                    <div id="track_timeline" class="timeline-items fixed-div">
                                        <!--begin::Item-->

                                        <!--end::Item-->
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="kt_tab_pane_5_doc1" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_doc1">
                                {{-- doc 1 --}}
                                <div class="row">
                                    <div class="col-xl-4" id="scan1d">
                                        <div class="form-group">
                                            <label class="text-muted font-size-sm">Scanned
                                                Document 1</label>
                                            <p>
                                                <a id="scanned_document1d" href="" target="_blank"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="25%" height="25%"
                                                        fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                    </svg></a>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-xl-4" id="scan2d">
                                        <div class="form-group">
                                            <label class="text-muted font-size-sm">Scanned
                                                Document 2</label>
                                            <p>
                                                <a id="scanned_document2d" href="" target="_blank"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="25%" height="25%"
                                                        fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                    </svg></a>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-xl-4" id="scan3d">
                                        <div class="form-group">
                                            <label class="text-muted font-size-sm">Scanned
                                                Document 3</label>
                                            <p>
                                                <a id="scanned_document3d" href="" target="_blank"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="25%" height="25%"
                                                        fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                    </svg></a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_5_doc2" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_doc2">
                                {{-- doc 2 --}}
                                <div class="col-xl-12">
                                    <div class="pb-5">
                                        <div class="row">
                                            <div class="col-xl-3" id="scan4d">
                                                <div class="form-group">
                                                    <label class="text-muted font-size-sm">Scanned
                                                        Document 4</label>
                                                    <p>
                                                        <a id="scanned_documents4d" href="" target="_blank"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                height="25%" fill="currentColor" class="bi bi-file-text"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg></a>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="col-xl-3" id="scan5d">
                                                <div class="form-group">
                                                    <label class="text-muted font-size-sm">Scanned
                                                        Document 5</label>
                                                    <p>
                                                        <a id="scanned_documents5d" href="" target="_blank"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                height="25%" fill="currentColor" class="bi bi-file-text"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg></a>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="col-xl-3" id="scan6d">
                                                <div class="form-group">
                                                    <label class="text-muted font-size-sm">Scanned
                                                        Document 6</label>
                                                    <p>
                                                        <a id="scanned_documents6d" href="" target="_blank"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                height="25%" fill="currentColor" class="bi bi-file-text"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg></a>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="col-xl-3" id="scan7d">
                                                <div class="form-group">
                                                    <label class="text-muted font-size-sm">Scanned
                                                        Document 7</label>
                                                    <p>
                                                        <a id="scanned_documents7d" href="" target="_blank"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25%"
                                                                height="25%" fill="currentColor" class="bi bi-file-text"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg></a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="kt_tab_pane_5_doc3"
                            role="tabpanel" aria-labelledby="kt_tab_pane_5_doc3">
                            <p id="scan3">
                                <a id="scanned_document3d" href="#"
                                    target="_blank"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25%" height="25%" fill="currentColor"
                                        class="bi bi-file-text" viewBox="0 0 16 16">
                                        <path
                                            d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                        <path
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                    </svg></a>
                            </p>
                        </div> --}}


                            <div class="tab-pane fade" id="kt_tab_pane_5_note" role="tabpanel"
                                aria-labelledby="kt_tab_pane_5_note">
                                <div class="timeline timeline-4">
                                    <div class="timeline-bar">
                                    </div>
                                    <div id="note_chat_timeline" class="timeline-items">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (request()->query('tab') != 'inbox')
                    <br>
                    <br>
                @endif
                @if (request()->query('tab') == 'inbox')
                    <div style="display: none" id="reply_note" class="card-body">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">Reply
                                Note <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="replynote" rows="2"></textarea>
                        </div>
                        <br>
                        <div class="form-group mb-1">
                            <button onclick="replyNote()" type="button"
                                class="btn btn-gradient-success font-weight-bold">Reply</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!--end::Modal-->

</div>

<script>
    $("#final_doc").submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Confirm",
            text: "Are you sure you want to ",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: " Confirm",
            showCancelButton: true,
            cancelButtonText: "Cancel ",
            customClass: {
                confirmButton: "btn btn-danger",
                cancelButton: "btn btn-default",
            },
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('final_doc').submit();
            }
        });
    });

</script>

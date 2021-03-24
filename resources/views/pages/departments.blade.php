@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin:: tagyfy Modal-->
        <div class="modal fade" id="dh" tabindex="-1" role="dialog" aria-labelledby="dh" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="user_p_head">User Permissions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <input type="hidden" id="per_dep_id" name="per_dep_id">
                    <div class="modal-body">
                        <div>
                            <label class="text-danger">General Directors</label>
                            <input id="gd" class="form-control tagify" name='gd' placeholder="Add department heads" />
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div>
                            <label class="text-warning"> Directors</label>

                            <input id="director" class="form-control tagify" name='director' placeholder="Add department heads"
                                value="Director 1, Ddirector 2" />
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div>
                            <label class="text-success"> Department Heads</label>

                            <input id="departhead" name="departhead" class="form-control tagify" 
                                placeholder="Add department heads" />
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div>
                            <label class="text-primary"> Supervisors</label>

                            <input id="super" class="form-control tagify" name='supervisor' placeholder="Add Supervisors"
                                 />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary font-weight-bold">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!--end::tagyfyModal-->

        <!--begin:: section Modal-->
        <div class="modal fade" id="section" tabindex="-1" role="dialog" aria-labelledby="section" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Section</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ url('section') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Section Name</label>
                                    <input name="section" type="text" class="form-control form-control-solid" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <label>Select Department</label>
                                    <select name="dep_id" class="form-control form-control-solid">
                                      @foreach ($department as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        <!--end::Form-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <input type="submit" value="Save" class="btn btn-primary mr-2">
                    </form>

                    </div>
                </div>
            </div>
        </div>
        <!--end::department Modal-->
        <div class="modal fade" id="department" tabindex="-1" role="dialog" aria-labelledby="department" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" method="POST" action="{{ url('department') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Department Name</label>
                                    <input type="text" name="name" class="form-control form-control-solid" placeholder="Name" />
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <input type="submit" value="save" class="btn btn-primary font-weight-bold">
                    </div>
                    </form>

                </div>
            </div>
        </div>

<!--begin:: edit section Modal-->
<div class="modal fade" id="edit_section" tabindex="-1" role="dialog" aria-labelledby="section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <!--begin::Form-->
                <form class="form" method="POST" action="{{ url('section') }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Section Name</label>
                            <input name="section" id="section_update" type="text" class="form-control form-control-solid" placeholder="Name" />
                            <input type="hidden" name="section_id" id="section_id">
                        </div>
                        <div class="form-group">
                            <label>Select Department</label>
                            <select name="dep_id" id="sec_dep_id" class="form-control form-control-solid">
                              @foreach ($department as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                <!--end::Form-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Close</button>
                <input type="submit" value="Update" class="btn btn-primary mr-2">
            </form>

            </div>
        </div>
    </div>
</div>
<!--end::edit department Modal-->
<div class="modal fade" id="edit_department" tabindex="-1" role="dialog" aria-labelledby="department" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ url('department') }}">
                    @csrf
                    @method('PUT')
                    {{-- <h6>Current : <span class="text-primary">Hai</span></h6> --}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Department Name</label>
                            <input type="text" id="department_id" name="name" class="form-control form-control-solid" placeholder="Name" />
                            <input type="hidden" name="dep_id" id="dep_id">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Close</button>
                <input type="submit" value="Update" class="btn btn-primary font-weight-bold">
            </div>
            </form>
        </div>
    </div>
</div>
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Manage Department & Sections
                            <span class="d-block text-muted pt-2 font-size-sm">List of departments and Sections</span>
                            @foreach ($errors->all() as $error)
                                <span class="text-danger mt-3 font-weight-bold font-size-sm">{{ $error }}</span>
                            @endforeach
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button"
                                class="btn btn-primary btn-gradient-success  font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>New</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <!-- <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li> -->
                                    <li class="navi-item">
                                        <a href="#" data-toggle="modal" data-target="#department" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Department</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" data-toggle="modal" data-target="#section" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Section</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->

                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->

                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@push('scripts')
    <script src="assets/js/pages/crud/forms/widgets/tagify.js"></script>
    <script src="assets/js/pages/crud/ktdatatable/child/data-ajax.js"></script>
@endpush('scripts')

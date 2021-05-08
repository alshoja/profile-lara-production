@extends('layouts.app')
@section('content')
    <div class="container">
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
                                        @if (Auth::user()->role != 'admin')
                                            @if (Auth::user()->role != 'general_director')
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4  @if (request()->query('tab') == 'pending') {{ 'active' }} @endif"
                                                        href="{{ url('profiles?tab=pending') }}">
                                                    @if (Auth::user()->role == 'employ') Pending @else
                                                            Upcoming & In Progress @endif
                                                    </a>
                                            @endif
                                        @endif
                                        </li>
                                        @if (Auth::user()->role != 'admin')
                                            @if (Auth::user()->role == 'employ')
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4   @if (request()->query('tab') === 'drafts') {{ 'active' }} @endif"
                                                        href="{{ url('profiles?tab=drafts') }}">
                                                        Drafts
                                                    </a>
                                                </li>
                                            @endif

                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4   @if (request()->query('tab') === 'inbox') {{ 'active' }} @endif"
                                                    href="{{ url('profiles?tab=inbox') }}">
                                                    Inbox
                                                </a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->role == 'supervisor' || Auth::user()->role == 'employ')
                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4   @if (request()->query('tab') === 'final') {{ 'active' }} @endif"
                                                    href="{{ url('profiles?tab=final') }}">
                                                    In Final Process
                                                </a>
                                            </li>
                                        @endif

                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4   @if (request()->query('tab') === 'completed') {{ 'active' }} @endif"
                                                href="{{ url('profiles?tab=completed') }}">
                                                Completed
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <x-Inbox :profiles="$profiles" />
                                    <!--end::Table-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex flex-wrap mr-3">
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
                                            {{ $profiles->appends(request()->query())->links() }}
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <select id="perpage" onchange="perPageItems()"
                                                class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                                style="width: 75px;">
                                                @if (request()->query('perPage'))
                                                    <option selected hidden value="{{ request()->query('perPage') }}">
                                                        {{ request()->query('perPage') }}
                                                    </option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                @else
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                @endif

                                            </select>
                                            @if (request()->query('perPage'))
                                                <span class="text-muted">Displaying {{ request()->query('perPage') }}
                                                    records</span>
                                            @else
                                                <span class="text-muted">Displaying 10 records</span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
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

            <!--end::Pagination-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Card-->
    </div>
@endsection
<style type="text/css">
    .notebook {
        background: url(http://i.stack.imgur.com/ynxjD.png) repeat-y;
        width: 600px;
        height: 300px;
        font: normal 14px verdana;
        line-height: 25px;
        padding: 2px 10px;
        border-style: none;
        border-color: Transparent;
    }

</style>
<style>
    fixed-div {
        overflow: auto;
        max-height: 200px;
    }

</style>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#document_Form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        alert("itd me");
        $.ajax({
            type: 'POST',
            url: `/profileDocumentUpdate`,
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    console.log(data);
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                printErrorMsg(XMLHttpRequest.responseJSON.error);
                showToast('You have some validation errors please fix it first !',
                    'Validation Error', 'danger');
            },

        });
    });

</script>
@push('script')

    <script src="assets/js/pages/inbox.js"></script>
    <script src="assets/js/pages/crud/ktdatatable/base/data-json.js"></script>
@endpush

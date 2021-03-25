@extends('layouts.app')
@section('content')
    <link href="assets/css/pages/wizard/wizard-4.rtl.css" rel="stylesheet" type="text/css" />
    <!--begin::Content-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create User</h3>
                </div>
                <form class="form" method="POST" enctype="multipart/form-data" action="/user">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" required name="name" autocomplete="name"
                                    placeholder="Enter full name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                            </div>
                            <div class="col-lg-3">
                                <label>Contact</label>
                                <input type="number" value="{{ old('contact') }}" name="contact" class="form-control"
                                    placeholder="Contact Number" />
                                <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                            </div>
                            <div class="col-lg-3">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter username or email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                            </div>

                            <div class="col-lg-3">
                                <label>Password</label>
                                <div class="input-icon">
                                    <input name="password" value="{{ old('password') }}" type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" />
                                    <span onclick="togglePassword()"><i
                                            class="text-dark-50 flaticon-eye icon-md"></i></span>
                                </div>
                                @error('password')
                                    <span class="form-text text-danger "> <strong>{{ $message }}</strong></span>
                                @enderror

                            </div>
                        </div>


                        <div class="separator my-1"></div>

                        <h6 class="text-primary">Permissions</h6>
                        <div class="separator separator-dashed my-3"></div>

                        <div class="form-group row">

                            <div class="col-lg-2">
                                <label class="col col-form-label">Suspend User</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-danger">
                                        <label>
                                            <input type="checkbox" value="1" name="suspend" />
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
                                            <input value="1" type="checkbox" checked="checked" name="can_add_user" />
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
                                            <input type="checkbox" value="1" name="create" />
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
                                            <input type="checkbox" value="1" name="update" />
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
                                            <input type="checkbox" value="1" name="delete" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div class="row form-group">
                            <div class="col-md-2">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_1"
                                    style="background-image: url(assets/media/users/blank.png)">
                                    <div class="image-input-wrapper"></div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
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
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_2"
                                    style="background-image: url(assets/media/users/blank.png)">
                                    <div class="image-input-wrapper"></div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="sign" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
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
                        <h6 class="text-primary">Role</h6>
                        <div class="separator separator-dashed my-2"></div>
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <!-- <label>User Role</label> -->
                                <div class="radio-inline">
                                    @if (Auth::user()->role == 'admin')
                                        <label id="admin-label" class="radio radio-solid text-primary">
                                            <input type="radio" onclick="toggleDepartment('admin')" name="role"
                                                checked="checked" value="admin" />
                                            <span></span>
                                            Admin
                                        </label>
                                        <label id="gd-label" class="radio radio-solid">
                                            <input type="radio" name="role" value="general_director" />
                                            <span></span>
                                            General Director
                                        </label>
                                    @endif
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'general_director')
                                        <label id="director-label" class="radio radio-solid">
                                            <input type="radio" onclick="toggleDepartment('director')" name="role"
                                                value="director" />
                                            <span></span>
                                            Director
                                        </label>
                                    @endif
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'general_director' || Auth::user()->role == 'director')
                                        <label id="dh-label" class="radio radio-solid">
                                            <input type="radio" onclick="toggleDepartment('dh')" name="role"
                                                value="department_head" />
                                            <span></span>
                                            Department Head
                                        </label>
                                    @endif
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'general_director' || Auth::user()->role == 'director' || Auth::user()->role == 'department_head')
                                        <label id="supervisor-label" class="radio radio-solid">
                                            <input type="radio" onclick="toggleDepartment('super')" name="role"
                                                value="supervisor" />
                                            <span></span>
                                            Supervisor
                                        </label>
                                    @endif
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'general_director' || Auth::user()->role == 'director' || Auth::user()->role == 'department_head' || Auth::user()->role == 'supervisor')
                                        <label id="employ-label" class="radio radio-solid">
                                            <input type="radio" onclick="toggleDepartment('employ')" name="role"
                                                value="employ" />
                                            <span></span>
                                            Employ
                                        </label>
                                    @endif

                                </div>
                                <!-- <span class="form-text text-muted">Please select user group</span> -->
                            </div>
                            @error('role')
                                <span class="form-text text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="submit" value="save" class="btn btn-primary btn-gradient-success  mr-2">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection

<script>
    function toggleDepartment(role) {
        changeColor(role);
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
<script>
    function togglePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
<!-- <script src="assets/js/pages/custom/user/add-user.js"></script> -->

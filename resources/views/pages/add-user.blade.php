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
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Full Name</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                            </div>
                            <div class="col-lg-4">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter username or email" />
                                <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                            </div>
                            <div class="col-lg-4">
                                <label>Contact</label>
                                <input type="number" class="form-control" placeholder="Contact Number" />
                                <!-- <span class="form-text text-danger">Please enter a valid Email or Username</span> -->
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>

                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Password</label>
                                <input type="email" class="form-control" placeholder="Password" />
                                <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                            </div>
                            <div class="col-lg-4">
                                <label>Confirm Password</label>
                                <input type="email" class="form-control" placeholder="Confirm Password" />
                                <!-- <span class="form-text text-danger">Confirm password does not match</span> -->
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <div class="col-lg-2">
                                <label class="col col-form-label">Suspend User</label>
                                <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
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
                                            <input type="checkbox" checked="checked" name="select" />
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
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
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
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
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
                                <div class="d-md-none mb-2"></div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>

                        <div class="form-group row">
                            <div class="col-lg-8">
                                <!-- <label>User Role</label> -->
                                <div class="radio-inline">
                                    <label id="admin-label" class="radio radio-solid text-primary">
                                        <input type="radio" onclick="toggleDepartment('admin')" name="example_2"
                                            checked="checked" value="2" />
                                        <span></span>
                                        Admin
                                    </label>
                                    <label id="gd-label" class="radio radio-solid">
                                        <input type="radio" onclick="toggleDepartment('gd')" name="example_2" value="2" />
                                        <span></span>
                                        General Director
                                    </label>
                                    <label id="director-label" class="radio radio-solid">
                                        <input type="radio" onclick="toggleDepartment('director')" name="example_2"
                                            value="2" />
                                        <span></span>
                                        Director
                                    </label>
                                    <label id="dh-label" class="radio radio-solid">
                                        <input type="radio" onclick="toggleDepartment('dh')" name="example_2" value="2" />
                                        <span></span>
                                        Department Head
                                    </label>
                                    <label id="supervisor-label" class="radio radio-solid">
                                        <input type="radio" onclick="toggleDepartment('super')" name="example_2"
                                            value="2" />
                                        <span></span>
                                        Supervisor
                                    </label>
                                    <label id="employ-label" class="radio radio-solid">
                                        <input type="radio" onclick="toggleDepartment('employ')" name="example_2"
                                            value="2" />
                                        <span></span>
                                        Employ
                                    </label>
                                </div>
                                <!-- <span class="form-text text-muted">Please select user group</span> -->
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div id="group-row" class="form-group row d-none">
                            <div id="department-row" class="col-2 d-none">
                                <label class="ml-3">Department</label>
                                <select class="form-control form-control-solid">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US" selected="selected">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div id="gd-row" class="col-2 d-none">
                                <label class="ml-3">General Director</label>
                                <select class="form-control form-control-solid">
                                    <option value="AF">GD 1</option>
                                    <option value="AX"> GD 2</option>
                                </select>
                            </div>
                            <div id="director-row" class="col-2 d-none">
                                <label class="ml-3">Director</label>
                                <select class="form-control form-control-solid">
                                    <option value="AF">D1 1</option>
                                    <option value="AX">D2 2</option>
                                </select>
                            </div>
                            <div id="dh-row" class="col-2 d-none">
                                <label class="ml-3">Department Head</label>
                                <select class="form-control form-control-solid">
                                    <option value="AF">DH 1</option>
                                    <option value="AX">Dh 2</option>
                                </select>
                            </div>
                            <div id="super-row" class="col-2 d-none">
                                <label class="ml-3">Supervisor</label>
                                <select class="form-control form-control-solid">
                                    <option value="AF">Supervisor 1</option>
                                    <option value="AX">Super 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-primary btn-gradient-success  mr-2">Save</button>
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
<!-- <script src="assets/js/pages/custom/user/add-user.js"></script> -->

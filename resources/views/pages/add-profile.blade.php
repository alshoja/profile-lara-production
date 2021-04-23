@extends('layouts.app')
@section('content')
    <link href="{{ asset('assets/css/pages/wizard/wizard-1.rtl.css') }}" rel="stylesheet" type="text/css" />

    <!--begin::Content-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-1" id="kt_wizard" data-wizard-state="step-first"
                        data-wizard-clickable="false">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-bus-stop"></i>
                                        <h3 class="wizard-title">1 Label </h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http:
                                                                                                                                                    <g stroke="
                                            none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-list"></i>
                                        <h3 class="wizard-title">Label 2</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http:
                                                                                                                                                    <g stroke="
                                            none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-responsive"></i>
                                        <h3 class="wizard-title">Label 3</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->

                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->

                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->

                                <!--end::Wizard Step 5 Nav-->
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-7">
                                <!--begin::Wizard Form-->
                                <form class="form" id="kt_form">
                                    @csrf
                                    <!--begin::Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h6 class="text-success"><small><?php echo date('l'); ?>&nbsp;,<?php echo date('d-Y'); ?>&nbsp;Time:<?php echo date('h:i:sa'); ?></small></h6>
                                        <br>
                                        <!-- <h3 class="mb-10 font-weight-bold text-dark">Some Label</h3> -->
                                        <!--begin::Input-->
                                        <div class="row form-group">
                                            <div class="col-xl-6">
                                                <label>Name Arabic</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg"
                                                    name="name_arabic" placeholder="Name" value="" id="name_arabic" />
                                                <span class="text-danger error-text name_err"></span>
                                            </div>
                                            <div class="col-xl-6">
                                                <label>Name English</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg"
                                                    name="name" placeholder="Name" value="" id="name" />
                                                <span class="text-danger error-text name_err"></span>
                                            </div>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->

                                        <!--end::Input-->
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <select name="nationality"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="nationality">
                                                        <option value="">Select</option>
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
                                                        <option value="AU" selected="selected">Australia</option>
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
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of
                                                        </option>
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
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
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
                                                        <option value="GS">South Georgia and the South Sandwich Islands
                                                        </option>
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
                                                        <option value="US">United States</option>
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
                                                    <span class="text-danger error-text nationality_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name="gender"
                                                        class="form-control form-control-solid form-control-lg" id="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    <span class="text-danger error-text gender_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>DOB</label>
                                                    <input type="date"
                                                        class="form-control form-control-solid form-control-lg" name="dob"
                                                        placeholder="Address Line 1" id="dob" />
                                                    <span class="text-danger error-text dob_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Place of birth</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="place_birth" placeholder="place of birth" value=""
                                                        id="place_birth" />
                                                </div>
                                                <span class="text-danger error-text place_birth_err"></span>
                                            </div>
                                            <div class="col-xl-8">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control form-control-solid form-control-lg"
                                                        name="address" placeholder="Address" value=""
                                                        id="address"></textarea>
                                                    <span class="text-danger error-text address_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Referal Name</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="referal_name" placeholder="Referal Name" value=""
                                                        id="referal_name" />
                                                    <span class="text-danger error-text referal_name_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Product Type</label>
                                                    <select name="product_type"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="product_type">
                                                        <option value="">Select</option>
                                                        <option value="p1">P1</option>
                                                        <option value="p2">P2</option>
                                                    </select>
                                                    <span class="text-danger error-text product_type_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Passport No</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="passport_no" placeholder="Passport Number" value=""
                                                        id="passport_no" />
                                                    <span class="text-danger error-text passport_no_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Passport Issue</label>
                                                    <select name="passport_issue"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="passport_issue">
                                                        <option value="">Select</option>
                                                        <option value="YE">P 1</option>
                                                        <option value="ZM">P 2</option>
                                                        <option value="ZW">P 3</option>
                                                    </select>
                                                    <span class="text-danger error-text passport_issue_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Date of Issue</label>
                                                    <input max="<?php echo date('Y-m-d'); ?>"
                                                        type="date" id="date_issue"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="date_issue" placeholder="Address Line 1" />

                                                    <span class="text-danger error-text date_issue_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Residency</label>
                                                    <select name="residency"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="residency">
                                                        <option value="">Select</option>
                                                        <option value="YE">P 1</option>
                                                        <option value="ZM">P 2</option>
                                                        <option value="ZW">P 3</option>
                                                    </select>
                                                    <span class="text-danger error-text residency_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>

                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="location" placeholder="Location" value="" id="location" />
                                                    <span class="text-danger error-text location_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Passport Expiry Date</label>
                                                    <input max="<?php echo date('Y-m-d'); ?>"
                                                        type="date" id="date_expiry"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="date_expiry" placeholder="Address Line 1" />

                                                    <span class="text-danger error-text date_expiry_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>UID Number</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg" name="uid"
                                                        placeholder="UID Number" value="" id="uid" />
                                                    <span class="text-danger error-text uid_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Proffession</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="proffession" placeholder="Proffession" value=""
                                                        id="proffession" />
                                                    <span class="text-danger error-text proffession_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                        </div>
                                        <button onclick="enableNext()"
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                            id="submit">Draft & Save</button>
                                    </div>

                                    <!--<input type = 'submit' value = "Save" class="btn btn-success font-weight-bolder"/>-->
                                </form>
                                <form id="kt_form1" class="form">
                                    @csrf
                                    <!--end::Wizard Step 1-->
                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">INVENTAROY DATA </h4>
                                        <span id="result"></span>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Inventory Name</label>
                                                    <select name="inventory_name" id="inventory_name"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>

                                                    <input type="text" id="editid" hidden name="editid">
                                                    <span class="text-danger error-text inventory_name_err"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Inventory Codes</label>
                                                    <select name="inventory_codes" id="inventory_codes"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text inventory_codes_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-9">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Notes</label>
                                                    <textarea class="form-control form-control-solid" name="note"
                                                        id="note"></textarea>
                                                    <span class="text-danger error-text note_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-12">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Inventory Detials</label>
                                                    <textarea class="form-control form-control-solid"
                                                        name="inventory_detials" id="inventory_detials"></textarea>
                                                    <span class="text-danger error-text inventory_detials_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>

                                        </div>

                                        <button
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                            id="submit" type="submit" onclick="enableNext()">save</button>
                                    </div>

                                </form>
                                <form id="kt_form2" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <!--end::Wizard Step 2-->
                                    <!--begin::Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h6 class="mb-10 font-weight-bold text-dark">Scanned Documents</h6>
                                        <!--begin::Select-->
                                        <input type="text" id="editid1" hidden name="editid1">
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Scanned Document 1</label>
                                                <input type="file" name="scanned_document1" id="scanned_document1"
                                                    class="form-control form-control-solid" />
                                                <span class="text-danger error-text scanned_document1_err"></span>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Scanned Document 2</label>
                                                <input type="file" name="scanned_document2" id="scanned_document2"
                                                    class="form-control form-control-solid" />
                                                <span class="text-danger error-text scanned_document2_err"></span>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Scanned Document 3</label>
                                                <input type="file" name="scanned_document3" id="scanned_document3"
                                                    class="form-control form-control-solid" />

                                                <span class="text-danger error-text scanned_document3_err"></span>

                                            </div>
                                        </div>



                                        <!--end::Select
                                                                                                                                                <input type = 'submit' value = "Save" class="btn btn-success font-weight-bolder"/>                                                                    <button class="btn btn-success font-weight-bolder" id="editstep">smave</button>-->
                                        <button type="submit" id="submit" onclick="enableNext()"
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4 uploadSave">Save</button>
                                    </div>
                                </form>

                                <form id="kt_form4">
                                    <!--end::Wizard Step 4-->
                                    <!--begin::Wizard Step 5-->

                                    <!--end::Wizard Step 5-->
                                    <!--begin::Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" id="previous"
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-prev" disabled
                                                onclick="enableNext()">Previous</button>
                                        </div>
                                        <div>

                                            <div class="btn-group">
                                                <button type="button" data-wizard-type="action-submit"
                                                    class="btn btn-success btn-gradient-success " hidden>Save</button>
                                                <button type="button" data-wizard-type="action-submit"
                                                    class="btn btn-primary btn-gradient-success dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    hidden>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Save as Draft</a>
                                                </div>
                                            </div>

                                            <!-- <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button> -->
                                            <button id="next" type="button"
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-next" disabled
                                                onclick="disableNext()">Next</button>
                                        </div>
                                    </div>
                                    <!--end::Wizard Actions-->
                                </form>
                                <!--end::Wizard Form-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                    <!--end::Wizard-->
                </div>
                <!--end::Wizard-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script type="text/javascript">
        function enableNext() {
            document.getElementById("next").disabled = false;
        }

    </script>
    <script type="text/javascript">
        function disableNext() {
            document.getElementById("next").disabled = true;
            document.getElementById("previous").disabled = false;
        }

    </script>
    <script type="text/javascript">
        $('#kt_form').on('submit', function(event) {
            event.preventDefault();

            let name_arabic = $('#name_arabic').val();
            let name = $('#name').val();
            let nationality = $('#nationality').val();
            let gender = $('#gender').val();
            let dob = $('#dob').val();
            let place_birth = $('#place_birth').val();
            let address = $('#address').val();
            let referal_name = $('#referal_name').val();
            let product_type = $('#product_type').val();
            let passport_no = $('#passport_no').val();
            let passport_issue = $('#passport_issue').val();
            let date_issue = $('#date_issue').val();
            let residency = $('#residency').val();
            let location = $('#location').val();
            let date_expiry = $('#date_expiry').val();
            let uid = $('#uid').val();
            let proffession = $('#proffession').val();

            $.ajax({
                url: "/profile/add-profile",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name_arabic: name_arabic,
                    name: name,
                    nationality: nationality,
                    gender: gender,
                    dob: dob,
                    place_birth: place_birth,
                    address: address,
                    referal_name: referal_name,
                    product_type: product_type,
                    passport_no: passport_no,
                    passport_issue: passport_issue,
                    date_issue: date_issue,
                    residency: residency,
                    location: location,
                    date_expiry: date_expiry,
                    uid: uid,
                    proffession: proffession,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        var id = data.id;
                        $('#editid').val(id);
                        $('#editid1').val(id);
                        $('#editid3').val(id);
                        $('#editid4').val(id);
                        enableNext();

                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    printErrorMsg(XMLHttpRequest.responseJSON.error);
                    showToast('You have some validation errors please fix it first !',
                        'Validation Error', 'danger');

                },
            });
        });

        function printErrorMsg(msg) {

            $.each(msg, function(key, value) {
                $('.' + key + '_err').text(value);
                $('#' + key).on('input', function(e) {

                    $('.' + key + '_err').text(value).hide();
                });

            });

            document.getElementById("next").disabled = true;
        }

    </script>

    <script type="text/javascript">
        $('#kt_form3').on('submit', function(event) {
            event.preventDefault();

            let record_status = $('#record_status').val();
            let record_dep_transfer = $('#record_dep_transfer').val();
            let editid3 = $('#editid3').val();
            $.ajax({
                url: "/stageFour",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    record_status: record_status,
                    record_dep_transfer: record_dep_transfer,
                    editid3: editid3,
                },
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
    <script type="text/javascript">
        $('#kt_form4').on('submit', function(event) {
            event.preventDefault();
            let belongs_to = $('#belongs_to').val();
            let editid4 = $('#editid4').val();

            $.ajax({
                url: "/stageSix",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    belongs_to: belongs_to,
                    editid4: editid4,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        console.log(data);
                    }
                    window.location.href = HOST_URL + "/profile/add-profile";
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    printErrorMsg(XMLHttpRequest.responseJSON.error);
                    showToast('You have some validation errors please fix it first !',
                        'Validation Error', 'danger');
                },
            });
        });

    </script>


    <!-- Stage 2 Script-->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#kt_form1').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "/updateUser",
                method: 'POST',
                data: $('#kt_form1').serialize(),
                dataType: 'json',
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



    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#kt_form2').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let saveButtonUpload = $(".uploadSave");
            saveButtonUpload.addClass('spinner spinner-white spinner-right')
            saveButtonUpload.prop('disabled', true);
            saveButtonUpload.html("Uploading ..");
            $.ajax({
                type: 'POST',
                url: `/stageThree`,
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        console.log(data);
                    }
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    saveButtonUpload.removeClass('spinner spinner-white spinner-right')
                    saveButtonUpload.prop('disabled', false);
                    saveButtonUpload.html("Save");
                    printErrorMsg(XMLHttpRequest.responseJSON.error);
                    if(XMLHttpRequest.status ==413){
                        showToast('Upload too large !',
                        'Upload Error', 'danger');
                    }
                    showToast('You have some validation errors please fix it first !',
                        'Validation Error', 'danger');
                },

            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = `
                                <div>
                                 <div class="row form-group">
                                    <div class="col-md-4">

                                        <select required name="product_type[]" id="product_type[]" class="form-control form-control-solid ">
                                            <option hidden value="">Select Product-1&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </option>
                                            <option value="YE">P 1</option>
                                            <option value="ZM">P 2</option>
                                            <option value="ZW">P 3</option>
                                        </select>
                                        {{-- <div class="d-md-none mb-2"></div> --}}
                                    </div>
                                    <div class="col-md-4">

                                        <select required name="manufacture_type[]" id="manufacture_type[]" class="form-control form-control-solid">
                                            <option hidden value=""> Select Type-1</option>
                                            <option value="YE">P 1</option>
                                            <option value="ZM">P 2</option>
                                            <option value="ZW">P 3</option>
                                        </select>
                                        {{-- <div class="d-md-none mb-2"></div> --}}
                                    </div>
                                    <div class="col-md-4">

                                        <select required name="shipped_type[]" id="shipped_type[]" class="form-control form-control-solid">
                                            <option selected hidden value="">Select type-3
                                            </option>
                                            <option value="YE">P 1</option>
                                            <option value="ZM">P 2</option>
                                            <option value="ZW">P 3</option>
                                        </select>
                                        {{-- <div class="d-md-none mb-2"></div> --}}
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">

                                        <input required type="text" class="form-control" placeholder="Kg" name="quantity_kg[]" id="quantity_kg[]" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-3">

                                        <input required type="text" class="form-control" placeholder="G" name="quantity_g[]" id="quantity_g[]" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-3">

                                        <input required type="text" class="form-control" placeholder="ML" name="quantity_ml[]" id="quantity_ml[]" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>

                                    <div required class="col-md-3">
                                        <!-- <label>Number:</label> -->
                                        <input type="text" class="form-control" placeholder="Digit" name="quantity_digit[]" id="quantity_digit[]" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                </div>
                                <a style="margin:10px;" href="javascript:;" data-repeater-delete=""
                                    class="btn btn-sm font-weight-bolder btn-danger btn-gradient-danger remove_button">
                                    <i class="la la-trash-o"></i>
                                </a>
                            </div>
                            `
            var x = 1;
            $(addButton).click(function() {

                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });

    </script>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
@endpush('scripts')

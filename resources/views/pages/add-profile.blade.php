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
                                                            <g stroke=" none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
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
                                                            <g stroke=" none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
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
                                        <svg xmlns="http:
                                                            <g stroke=" none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
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
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-truck"></i>
                                        <h3 class="wizard-title">Label 4</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http:
                                                            <g stroke=" none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
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
                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <i class="wizard-icon flaticon-globe"></i>
                                        <h3 class="wizard-title">Department & Section</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow last">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http:
                                                            <g stroke=" none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                x="11" y="5" width="2" height="14" rx="1" />
                                            <path
                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
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
                                        <h6 class="text-success"><small>SUNDAY ,21-2021 TIME:01:15:28PM</small></h6>
                                        <br>
                                        <!-- <h3 class="mb-10 font-weight-bold text-dark">Some Label</h3> -->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                name="name" placeholder="Name" value="" id="name" />
                                            <span class="form-text text-muted">Please enter your Name.</span>
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
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name="gender"
                                                        class="form-control form-control-solid form-control-lg" id="gender">
                                                        <option value="">Select</option>
                                                        <option value="AF">Male</option>
                                                        <option value="AX">Female</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>DOB</label>
                                                    <input type="date"
                                                        class="form-control form-control-solid form-control-lg" name="dob"
                                                        placeholder="Address Line 1" id="dob" />
                                                    <!-- <span class="form-text text-muted">Please enter DOb.</span> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>CitizenShip Status</label>
                                                    <select name="citizen_status"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="citizen_status">
                                                        <option value="">Select</option>
                                                        <option value="YE">Status 1</option>
                                                        <option value="ZM">Status 2</option>
                                                        <option value="ZW">Status 3</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>CitizenShip Location</label>
                                                    <select name="citizen_location"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="citizen_location">
                                                        <option value="">Select</option>
                                                        <option value="AF">Male</option>
                                                        <option value="AX">Female</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Citizenshi ID No</label>
                                                    <input type="number"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="citizen_id" placeholder="ID number" value=""
                                                        id="citizen_id" />
                                                    <!-- <span class="form-text text-muted">Please enter DOb.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Citizenship UID No</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="citizen_uid" placeholder="UID No" value="" id="citizen_uid" />
                                                    <span class="form-text text-muted">Please enter your UID No.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Passport No</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="passport_no" placeholder="Passport Number" value=""
                                                        id="passport_no" />
                                                    <span class="form-text text-muted">Please enter your Passport No.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Passport Type</label>
                                                    <select name="passport_type"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="passport_type">
                                                        <option value="">Select</option>
                                                        <option value="YE">P 1</option>
                                                        <option value="ZM">P 2</option>
                                                        <option value="ZW">P 3</option>
                                                    </select>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                        </div>
                                        <button onclick="enableNext()"
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                            id="submit">save</button>
                                    </div>

                                    <!--<input type = 'submit' value = "Save" class="btn btn-success font-weight-bolder"/>-->
                                </form>
                                <form id="kt_form1" class="form" b>
                                    @csrf
                                    <!--end::Wizard Step 1-->
                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Label </h4>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Date Of Entry</label>
                                                    <input type="date" id="entry_date"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="entry_date" placeholder="Address Line 1" />
                                                    <input type="text" id="editid" hidden name="editid">
                                                    <!-- <span class="form-text text-muted">Please enter DOb.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Entered By</label>
                                                    <select name="entered_by" id="entered_by"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Bought By</label>
                                                    <select name="bought_by" id="bought_by"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Entity By</label>
                                                    <select name="entity" id="entity"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Entity Location</label>
                                                    <select name="entity_location" id="entity_location"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="card-header">
                                                <div class="row">
                                                    <h3 class="card-title">
                                                        Label
                                                    </h3>
                                                </div>
                                            </div>
                                            <div id="kt_repeater_1">
                                                <div class="form-group row" id="kt_repeater_1">
                                                    <!-- <label class="col-lg-2 col-form-label text-right">Contacts:</label> -->
                                                    <div data-repeater-list="" class="col-lg-12">
                                                        <div data-repeater-item class="form-group row ">
                                                            <div class="row form-group">
                                                                <div class="col-md-4">
                                                                    <!-- <label>Name:</label> -->
                                                                    <select name="product_type" id="product_type"
                                                                        class="form-control form-control-solid ">
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
                                                                    <!-- <label>Name:</label> -->
                                                                    <select name="manufacture_type" id="manufacture_type"
                                                                        class="form-control form-control-solid">
                                                                        <option hidden value=""> Select Type-1</option>
                                                                        <option value="YE">P 1</option>
                                                                        <option value="ZM">P 2</option>
                                                                        <option value="ZW">P 3</option>
                                                                    </select>
                                                                    {{-- <div class="d-md-none mb-2"></div> --}}
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <!-- <label>Name:</label> -->
                                                                    <select name="shipped_type" id="shipped_type"
                                                                        class="form-control form-control-solid">
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
                                                                <div class="col-md-2">
                                                                    <!-- <label>Name:</label> -->
                                                                    <input type="text" class="form-control" placeholder="Kg"
                                                                        name="quantity_kg" id="quantity_kg" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <!-- <label>Name:</label> -->
                                                                    <input type="text" class="form-control" placeholder="G"
                                                                        name="quantity_g" id="quantity_g" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <!-- <label>Name:</label> -->
                                                                    <input type="text" class="form-control" placeholder="ML"
                                                                        name="quantity_ml" id="quantity_ml" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <!-- <label>Number:</label> -->
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Digit" name="quantity_digit"
                                                                        id="quantity_digit" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                        class="btn btn-sm font-weight-bolder btn-danger btn-gradient-danger">
                                                                        <i class="la la-trash-o"></i>Delete
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <a href="javascript:;" data-repeater-create=""
                                                            class="btn btn-sm font-weight-bolder btn-light-primary btn-gradient-success">
                                                            <i class="la la-plus"></i>Add
                                                        </a>
                                                    </div>
                                                </div>
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
                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>
                                        <!--begin::Select-->
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Shipping No</label>
                                                    <input type="text" id="shipping_no"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="shipping_no" placeholder="Shipping No" value="" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Coming From</label>
                                                    <select name="coming_from" id="coming_from"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Going to</label>
                                                    <select name="going_to" id="going_to"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Final Destination</label>
                                                    <select name="final_destination" id="final_destination"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="">Select</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>

                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label>Profile Picture</label>
                                                <div class="image-input image-input-empty image-input-outline"
                                                    id="kt_image_1"
                                                    style="background-image: url(assets/media/users/blank.png)">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_image" id="profile_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                                <!-- <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span> -->
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Product Image</label>
                                                <div class="image-input image-input-empty image-input-outline"
                                                    id="kt_image_2"
                                                    style="background-image: url(assets/media/users/blank.png)">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="product_image" id="product_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Document</label>
                                                <div class="image-input image-input-empty image-input-outline"
                                                    id="kt_image_3"
                                                    style="background-image: url(assets/media/users/blank.png)">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="doc_image" id="doc_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                        </div>
                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleTextarea">Note</label>
                                                    <textarea class="form-control form-control-solid" rows="3" name="note"
                                                        id="note"></textarea>
                                                    <input type="text" id="editid1" hidden name="editid1">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Select
                                                        <input type = 'submit' value = "Save" class="btn btn-success font-weight-bolder"/>
                                                        <button class="btn btn-success font-weight-bolder" id="editstep">smave</button>-->
                                        <button type="submit" id="submit" onclick="enableNext()"
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4">Save</button>
                                    </div>
                                </form>
                                <form id="kt_form3" method="post" action="/stageFour">
                                    <!--end::Wizard Step 3-->
                                    <!--begin::Wizard Step 4-->
                                    <div class="pb-5" data-wizard-type="step-content">

                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>
                                        <!--begin::Input-->
                                        <div class="form-group row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Record Status</label>
                                                    <select name="record_status" id="record_status"
                                                        class="form-control form-control-solid ">
                                                        <option value="">Record-1</option>
                                                        <option value="YE">R1</option>
                                                        <option value="ZM">r 2</option>
                                                        <option value="ZW">r 3</option>
                                                    </select>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>
                                        <div class="form-group row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label>Record Department Status</label>
                                                    <select name="record_dep_transfer" id="record_dep_transfer"
                                                        class="form-control form-control-solid ">
                                                        <option value="">status-1</option>
                                                        <option value="YE">s 1</option>
                                                        <option value="ZM">s 2</option>
                                                        <option value="ZW">s 3</option>
                                                    </select>
                                                    <input type="text" id="editid3" hidden name="editid3">
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>

                                            <button
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                                id="submit" type="submit" onclick="enableNext()">save</button>
                                        </div>

                                    </div>
                                </form>
                                <form id="kt_form4">
                                    <!--end::Wizard Step 4-->
                                    <!--begin::Wizard Step 5-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h6 class="mb-10 font-weight-bold text-dark">Label</h6>
                                        <!--begin::Input-->
                                        <div class="form-group row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>General Director</label>
                                                    <select name="belongs_to" id="belongs_to"
                                                        class="form-control form-control-solid ">
                                                        <option value="1">Record-1</option>
                                                        <option value="2">R1</option>
                                                        <option value="3">r 2</option>
                                                        <option value="4">r 3</option>
                                                    </select>
                                                    <div class="d-md-none mb-2"></div>
                                                    <input type="text" id="editid4" hidden name="editid4">
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                            id="submit" type="submit">save</button>



                                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
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

            let name = $('#name').val();
            let nationality = $('#nationality').val();
            let gender = $('#gender').val();
            let dob = $('#dob').val();
            let citizen_status = $('#citizen_status').val();
            let citizen_location = $('#citizen_location').val();
            let citizen_id = $('#citizen_id').val();
            let citizen_uid = $('#citizen_uid').val();
            let passport_no = $('#passport_no').val();
            let passport_type = $('#passport_type').val();

            $.ajax({
                url: "/profile/add-profile",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    nationality: nationality,
                    gender: gender,
                    dob: dob,
                    citizen_status: citizen_status,
                    citizen_location: citizen_location,
                    citizen_id: citizen_id,
                    citizen_uid: citizen_uid,
                    passport_no: passport_no,
                    passport_type: passport_type,
                },
                success: function(data) {
                    var id = data.id;
                    $('#editid').val(id);
                    $('#editid1').val(id);
                    $('#editid3').val(id);
                    $('#editid4').val(id);
                    // console.log(response);
                },
            });
        });

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
                success: function(response) {
                    console.log(response);
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
                url: "/stageFive",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    belongs_to: belongs_to,
                    editid4: editid4,
                },
                success: function(response) {
                    console.log(response);
                    window.location.href = HOST_URL + "/profile/add-profile";
                },
            });
        });

    </script>


    <!-- Stage 2 Script-->
    <script type="text/javascript">
        $('#kt_form1').on('submit', function(event) {
            event.preventDefault();

            let entered_by = $('#entered_by').val();
            let bought_by = $('#bought_by').val();
            let entity = $('#entity').val();
            let entry_date = $('#entry_date').val();
            let entity_location = $('#entity_location').val();
            let editid = $('#editid').val();

            $.ajax({
                url: "/updateUser",
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                },
            });


        });

    </script>

    <!-- stage 3 code-->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#editstep').on('click', function() {
            event.preventDefault();
            var fd = new FormData();
            let shipping_no = $('#shipping_no').val();
            let coming_from = $('#coming_from').val();
            let going_to = $('#going_to').val();
            let final_destination = $('#final_destination').val();
            let profile_image = document.getElementById("profile_image").files[0].name;
            let product_image = document.getElementById("product_image").files[0].name;
            let doc_image = document.getElementById("doc_image").files[0].name;
            let note = $('#note').val();
            let editid = $('#editid').val();

            fd.append('shipping_no', shipping_no);
            fd.append('coming_from', coming_from);
            fd.append('going_to', going_to);
            fd.append('final_destination', final_destination);
            fd.append('profile_image', profile_image);
            fd.append('product_image', product_image);
            fd.append('doc_image', doc_image);
            fd.append('note', note);
            fd.append('editid', editid);

            $.ajax({
                url: "/stageThree",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                data: fd,
                dataType: 'json',
                async: false,
                type: 'POST',
                processData: false,
                contentType: false,
                success: function(msg) {
                    console.log(msg);
                },

            });
        });

    </script>
    <!--end::Content-->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#kt_form2').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: `/stageThree`,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response) {
                        this.reset();
                    }
                },
                error: function(response) {
                    console.log(response);
                    alert('Image has been not uploaded successfully');
                }
            });
        });

    </script>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
@endpush('scripts')

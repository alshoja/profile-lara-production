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
                                                    <g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                                    <g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                                    <g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                                    <g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                                    <g stroke=" none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!--begin::Wizard Form-->
                                <form class="form" id="kt_form" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin::Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h6 class="text-success"><small>UPDATE DATA</small></h6>
                                        <br>
                                        <!-- <h3 class="mb-10 font-weight-bold text-dark">Some Label</h3> -->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                name="name" placeholder="Name" value="{{ $profile->name }}" id="name" />
                                                <span class="text-danger error-text name_err"></span>
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
                                                        <option value="{{ $profile->nationality }}">
                                                            {{ $profile->nationality }}</option>
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
                                                    <span class="text-danger error-text nationality _err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name="gender"
                                                        class="form-control form-control-solid form-control-lg" id="gender">
                                                        <option value="{{ $profile->gender }}">{{ $profile->gender }}
                                                        </option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
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
                                                        placeholder="Address Line 1" id="dob"
                                                        value="{{ $profile->dob }}" />
                                                        <span class="text-danger error-text dob_err"></span>
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
                                                        <option value="{{ $profile->citizen_status }}">
                                                            {{ $profile->citizen_status }}</option>
                                                        <option value="YE">Status 1</option>
                                                        <option value="ZM">Status 2</option>
                                                        <option value="ZW">Status 3</option>
                                                    </select>
                                                    <span class="text-danger error-text citizen_status_err"></span>
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
                                                        <option value="{{ $profile->citizen_location }}">
                                                            {{ $profile->citizen_location }}</option>
                                                        <option value="AF">Male</option>
                                                        <option value="AX">Female</option>
                                                    </select>
                                                    <span class="text-danger error-text citizen_location_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Citizenshi ID No</label>
                                                    <input type="number"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="citizen_id" placeholder="ID number"
                                                        value="{{ $profile->citizen_id }}" id="citizen_id" />
                                                        <span class="text-danger error-text citizen_id_err"></span>
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
                                                        name="citizen_uid" placeholder="UID No"
                                                        value="{{ $profile->citizen_uid }}" id="citizen_uid" />
                                                        <span class="text-danger error-text citizen_uid_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Passport No</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="passport_no" placeholder="Passport Number"
                                                        value="{{ $profile->passport_no }}" id="passport_no" />
                                                        <span class="text-danger error-text passport_no_err"></span>
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
                                                        <option value="{{ $profile->passport_type }}">
                                                            {{ $profile->passport_type }}</option>
                                                        <option value="YE">P 1</option>
                                                        <option value="ZM">P 2</option>
                                                        <option value="ZW">P 3</option>
                                                    </select>
                                                    <span class="text-danger error-text passport_type_err"></span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                        </div>

                                    </div>



                                    <!--end::Wizard Step 1-->
                                    <!--begin::Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Label </h4>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Date Of Entry</label>
                                                    <input type="date" id="entry_date" value="{{ $profile->entry_date }}"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="entry_date" placeholder="Address Line 1" />
                                                    <input type="text" id="editid" value="{{ $profile->id }}"
                                                        name="editid" hidden>
                                                        <span class="text-danger error-text entry_date_err"></span>
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
                                                        <option value="{{ $profile->entered_by }}">
                                                            {{ $profile->entered_by }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text entered_by_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Bought By</label>
                                                    <select name="bought_by" id="bought_by"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->bought_by }}">
                                                            {{ $profile->bought_by }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text bought_by_err"></span>
                                                    
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Entity By</label>
                                                    <select name="entity" id="entity"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->entity_location }}">
                                                            {{ $profile->entity_location }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text entity_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Client Entity Location</label>
                                                    <select name="entity_location" id="entity_location"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->entity_location }}">
                                                            {{ $profile->entity_location }}</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text entity_location_err"></span>
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
                                            <div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <a href="javascript:void(0);"
                                                            class="add_button btn btn-sm font-weight-bolder btn-light-primary btn-gradient-success">
                                                            <i class="la la-plus"></i>Add
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="field_wrapper" >
                                                     @foreach($profile->products as $key)
                                               
                                                    
                                                    
                                                                       
                                                    <div class="row form-group" id="divid{{ $key->id }}">
                                                        <div class="col-md-4">
                                                            <!-- <label>Name:</label> -->
                                                           
                                                            <input  required type="text" hidden name="product_id[]" id="product_id[]" value="{{ $key->id }}">
                                                            <select name="product_type[]" id="product_type[]"
                                                                class="form-control form-control-solid ">
                                                                <option value="{{ $key->product_type }}">{{ $key->product_type }}</option>
                                                                <option value="YE">P 1</option>
                                                                <option value="ZM">P 2</option>
                                                                <option value="ZW">P 3</option>
                                                            </select>
                                                            {{-- <div class="d-md-none mb-2"></div> --}}
                                                        </div>
                                                        <div class="col-md-3">
                                                            <!-- <label>Name:</label> -->
                                                            <select required name="manufacture_type[]" id="manufacture_type[]"
                                                                class="form-control form-control-solid">
                                                                <option value="{{ $key->manufacture_type }}">{{ $key->manufacture_type }}</option>
                                                                <option value="YE">P 1</option>
                                                                <option value="ZM">P 2</option>
                                                                <option value="ZW">P 3</option>
                                                            </select>
                                                            {{-- <div class="d-md-none mb-2"></div> --}}
                                                        </div>
                                                        <div class="col-md-3">
                                                            <!-- <label>Name:</label> -->
                                                            <select required name="shipped_type[]" id="shipped_type[]"
                                                                class="form-control form-control-solid">
                                                                <option value="{{ $key->shipped_type }}">{{ $key->shipped_type }}</option>
                                                                <option value="YE">P 1</option>
                                                                <option value="ZM">P 2</option>
                                                                <option value="ZW">P 3</option>
                                                            </select>
                                                            {{-- <div class="d-md-none mb-2"></div> --}}
                                                        </div>
                                                        <div class="col-md-2">
                                                            
                                                            <button type="button" value="{{ $key->id }}" id="productdelete" class="btn btn-gradient-danger remove-button">
                                                                Delete</button>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group" id="divdelete{{ $key->id }}">
                                                        <div class="col-md-3">
                                                            <!-- <label>Name:</label> -->
                                                            <input required type="text" class="form-control" placeholder="Kg"
                                                                name="quantity_kg[]" id="quantity_kg[]" value="{{ $key->quantity_kg }}" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <!-- <label>Name:</label> -->
                                                            <input required type="text" class="form-control" placeholder="G"
                                                                name="quantity_g[]" id="quantity_g[]" value="{{ $key->quantity_g }}" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <!-- <label>Name:</label> -->
                                                            <input required type="text" class="form-control" placeholder="ML"
                                                                name="quantity_ml[]" id="quantity_ml[]" value="{{ $key->quantity_ml }}" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <!-- <label>Number:</label> -->
                                                            <input required type="text" class="form-control" placeholder="Digit"
                                                                name="quantity_digit[]" id="quantity_digit[]" value="{{ $key->quantity_digit }}"/>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                    </div>
                                                    
                                                    @endforeach
                                                </div>
                                               

                                            </div>
                                        </div>
                                    </div>


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
                                                        name="shipping_no" placeholder="Shipping No"
                                                        value="{{ $profile->shipping_no }}" />
                                                        <span class="text-danger error-text shipping_no_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Coming From</label>
                                                    <select name="coming_from" id="coming_from"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->coming_from }}">
                                                            {{ $profile->coming_from }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text coming_from_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Going to</label>
                                                    <select name="going_to" id="going_to"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->going_to }}">
                                                            {{ $profile->going_to }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text going_to_err"></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-3">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Final Destination</label>
                                                    <select name="final_destination" id="final_destination"
                                                        class="form-control form-control-solid form-control-lg">
                                                        <option value="{{ $profile->final_destination }}">
                                                            {{ $profile->final_destination }}</option>
                                                        <option value="AF">ALshoja</option>
                                                        <option value="AX">Åland </option>
                                                        <option value="AL">Albania</option>
                                                    </select>
                                                    <span class="text-danger error-text final_destination_err"></span>
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
                                                    style="background-image: url(/{{ $profile->profile_image }})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_image" id="profile_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove1"
                                                            value="{{ $profile->profile_image }}" />
                                                            <span class="text-danger error-text profile_image_err"></span>
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
                                                    style="background-image: url(/{{ $profile->product_image }})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="product_image" id="product_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove2"
                                                            value="{{ $profile->product_image }}" />
                                                            <span class="text-danger error-text product_image_err"></span>
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
                                                    style="background-image: url(/{{ $profile->doc_image }})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="doc_image" id="doc_image"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove3"
                                                            value="{{ $profile->doc_image }}" />
                                                            <span class="text-danger error-text doc_image_err"></span>
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
                                                        id="note">{{ $profile->note }}</textarea>
                                                        <span class="text-danger error-text note_err"></span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

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
                                                        <option value="{{ $profile->record_status }}">
                                                            {{ $profile->record_status }}</option>
                                                        <option value="YE">R1</option>
                                                        <option value="ZM">r 2</option>
                                                        <option value="ZW">r 3</option>
                                                    </select>
                                                    <span class="text-danger error-text record_status_err"></span>
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
                                                        <option value="{{ $profile->record_dep_transfer }}">
                                                            {{ $profile->record_dep_transfer }}</option>
                                                        <option value="YE">s 1</option>
                                                        <option value="ZM">s 2</option>
                                                        <option value="ZW">s 3</option>
                                                    </select>
                                                    <span class="text-danger error-text record_dep_transfer_err"></span>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end::Wizard Step 4-->
                                    <!--begin::Wizard Step 5-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        {{-- <h6 class="mb-10 font-weight-bold text-dark">Label</h6> --}}
                                        <!--begin::Input-->
                                        <div class="form-group row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                   <h6>{{$profile->department->name}}</h6>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Section</label>
                                                   <h6>{{$profile->section->name}}</h6>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button id="submit" type="submit" 
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4">Update</button>
                                        </div>

                                    </div>
                                    <!--end::Wizard Step 5-->
                                    <!--begin::Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" id="previous"
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-prev">Previous</button>
                                        </div>
                                        <div>
                                       
                                            
                                            <!-- <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button> -->
                                            <button id="next" type="button"
                                                class="btn btn-primary btn-gradient-success font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-next">Next</button>
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

        $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
        
                $('#kt_form').on('submit', function(event) {
                    event.preventDefault();
        
                 
        
                    $.ajax({
                        url: "/profileUpdate",
                        method: 'POST',
                        data: $('#kt_form').serialize(),
                        dataType: 'json',
                        success: function(data) {
                            if($.isEmptyObject(data.error)){
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

                function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
              
                $('.' + key + '_err').text(value);
                $('#'+ key).on('input',  function(e) {

                $('.' + key + '_err').text(value).hide();
                });

            });
             //document.getElementById("next").disabled = true;  
        }
            </script>
      
<script type="text/javascript">
      function refreshPage(divname, divname1)
      {
        var gfg_down =  document.getElementById(divname);
        gfg_down.remove();
        var div_down =  document.getElementById(divname1);
        div_down.remove();

      }

      
      </script>
    <script type="text/javascript">
    
    $(document).on('click', '#productdelete', function(e){

        let productid = $('#productdelete').val();
            let divid='divid'+productid;
            let divdelete='divdelete'+productid;
            $.ajax({
                url: "/stageFive",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    productid: productid,
                   
                },
                success: function(response) {
                    console.log(response);
                 refreshPage(divid,divdelete);
               
                },
                
                
            });
});


</script>
  
     <script type="text/javascript">
        $(document).ready(function() {
            console.log('hai initiated')
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = `
                                <div> 
                                <div class="row form-group">
                                                                                    <div class="col-md-4">
                                                                                        <input type="text" hidden name="product_id[]" id="product_id[]">
                                                                                        <select required name="product_type[]" id="product_type[]"
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
                                                                                      
                                                                                        <select required name="manufacture_type[]" id="manufacture_type[]"
                                                                                            class="form-control form-control-solid">
                                                                                            <option hidden value=""> Select Type-1</option>
                                                                                            <option value="YE">P 1</option>
                                                                                            <option value="ZM">P 2</option>
                                                                                            <option value="ZW">P 3</option>
                                                                                        </select>
                                                                                        {{-- <div class="d-md-none mb-2"></div> --}}
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                   
                                                                                        <select required name="shipped_type[]" id="shipped_type[]"
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
                                                                                    <div class="col-md-3">
                                                                                       
                                                                                        <input required type="text" class="form-control" placeholder="Kg"
                                                                                            name="quantity_kg[]" id="quantity_kg[]" />
                                                                                        <div class="d-md-none mb-2"></div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                       
                                                                                        <input required type="text" class="form-control" placeholder="G"
                                                                                            name="quantity_g[]" id="quantity_g[]" />
                                                                                        <div class="d-md-none mb-2"></div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                     
                                                                                        <input required type="text" class="form-control" placeholder="ML"
                                                                                            name="quantity_ml[]" id="quantity_ml[]" />
                                                                                        <div class="d-md-none mb-2"></div>
                                                                                    </div>

                                                                                    <div class="col-md-3">
                                                                                        <!-- <label>Number:</label> -->
                                                                                        <input required type="text" class="form-control" placeholder="Digit"
                                                                                            name="quantity_digit[]" id="quantity_digit[]" />
                                                                                        <div class="d-md-none mb-2"></div>
                                                                                    </div>
                                                                                </div> 
                                                                                 <a style="margin:10px;" href="javascript:;" data-repeater-delete=""
                                                                                            class=" btn btn-gradient-danger remove_button">
                                                                                            Delete
                                                                                        </a>
                                                                                        </div>`
            // var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function() {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

    </script>
    
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
@endpush('scripts')

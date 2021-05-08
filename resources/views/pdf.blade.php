<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $id }}</title>
    <style type="text/css">
        body {
            border: 1px solid rgb(248, 232, 0);
            padding: 10px;
            margin: 0;
            /* background-color: #f5fdeb */
        }

        @page {
            size: 21cm 29.7cm;
            margin: 2cm
        }

        .A4 {
            line-height: 120%;
            text-align: justify;
            background: transparent
        }

        .center {
            margin: auto;
            width: 60%;
            border: 3px solid #73AD21;
            padding: 10px;
        }

        .Imgcenter {
            display: block;
            margin-right: 390px;
            width: 30%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 4px;
            text-align: right;
        }

        .td-c-1 {
            background-color: #f0a4ff1e
        }

        .sign {
            style="min-width: 70px !important; 
max-width: 100px !important;
        }

        /* body { font-family: DejaVu Sans, sans-serif; } */

    </style>
    <meta charset="utf-8">
</head>

<body>
    <div class="A4">
        <div class="Imgcenter">
            <img src="{{ public_path('sample.png') }}" height="100px">
        </div>
        <h3 align="center">Tittle Here</h3>
        <table style="width:100%">
            <tr style="background-color: #fff3e4">
                <th style="text-align:right; " colspan="5">Basic Information</th>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Name</td>
                <td>&nbsp;{{ $name }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Name in Arabic</td>
                <td>&nbsp;{{ $name_arabic }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Nationality</td>
                <td>&nbsp;{{ $nationality }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Gender</td>
                <td>&nbsp;{{ $gender }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;DOB</td>
                <td>&nbsp;{{ $dob }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Place Of Birth</td>
                <td>&nbsp;{{ $place_birth }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Address</td>
                <td>&nbsp;{{ $address }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Product Type</td>
                <td>&nbsp;{{ $product_type }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Passport No</td>
                <td>&nbsp;{{ $passport_no }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Passport Type</td>
                <td>&nbsp;{{ $passport_type }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Passport Issue</td>
                <td>&nbsp;{{ $passport_issue }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Date of Issue</td>
                <td>&nbsp;{{ $date_issue }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Residency</td>
                <td>&nbsp;{{ $residency }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;Location</td>
                <td>&nbsp;{{ $location }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Passport Expiry Date</td>
                <td>&nbsp;{{ $date_expiry }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;UID Number</td>
                <td>&nbsp;{{ $uid }}</td>
            </tr>
            <tr>
                <td class="td-c-1">&nbsp;Profession</td>
                <td>&nbsp;{{ $proffession }}</td>
                <td></td>
                <td class="td-c-1">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr style="background-color: #fff3e4">
                <td style="text-align:right; color: green " colspan="5">Detailed</td>
            </tr>
            <tr>
                <td style="text-align:center; color:red;' " colspan="5">Inventory Data</td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4">&nbsp;Inventory Name</td>
                    <td>{{$inventory_name}}</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;Inventory Code</td>
                    <td>{{$inventory_codes}}</td>
                </tr>
            </tfoot>
        </table>
        <div style="border: 1px solid black;margin-top:-1.7px;width:871px;margin-left:0.5px">
            <h3 align="right" style="color: red; padding: 10px">Inventory Details</h3>
            <p align="right" style="padding: 11px">{{ $inventory_detials }}</p>
        </div>
        <div style="black;margin-top:-1.7px">
            <table style="width:100%">
                <tr>
                    <th style="text-align:right; color: blue" colspan="4">Header</th>
                    <th style="text-align:right; color: red ">Description Here</th>
                </tr>
                <tr style="background-color: #fff3e4">
                    <td>Employ</td>
                    <td>Supervisor</td>
                    <td>Department Head</td>
                    <td>Director</td>
                    <td>General_director</td>
                </tr>
                <tr>
                    <td>
                        <img class="sign" src="{{ public_path('s.png') }}" alt="Logo">
                    </td>
                    <td>
                        <img class="sign" src="{{ public_path('s.png') }}" alt="Logo">
                    </td>
                    <td>
                        <img class="sign" src="{{ public_path('s.png') }}" alt="Logo">
                    </td>
                    <td>
                        <img class="sign" src="{{ public_path('s.png') }}" alt="Logo">
                    </td>
                    <td>
                        <img class="sign" src="{{ public_path('s.png') }}" alt="Logo">
                    </td>

                </tr>
            </table>
        </div>
</body>

</html>

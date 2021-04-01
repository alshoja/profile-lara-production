<script>
    // var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    var HOST_URL = "{{ url('/') }}"

</script>

<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };

</script>

<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->

<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="assets/js/pages/custom/user/list-datatable.js"></script> -->

<script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
<script src="{{ asset('assets/js/pages/date-range-widgets.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/file-upload/image-input.js') }}"></script>

<script src="{{ asset('assets/js/pages/custom/login/login-general.js') }}"></script>
<script src="{{ asset('assets/js/ajax-req.js') }}"></script>
<script src="{{ asset('assets/js/comon-sweet-alert.js') }}"></script>
<script src="{{ asset('assets/js/toast.js') }}"></script>
<script src="{{ asset('assets/js/time.js') }}"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });

</script> --}}
<script>
    // setInterval(function() {
    //     getNotifications()
    //     console.info('Checking for new notification.....')
    // }, 20000);
    localStorage.setItem('session_id', {{ Auth::user()->id }});

</script>
<script>
    $(document).ajaxSend(function() {
        $('#ajaxloader').fadeIn(250);
    });
    $(document).ajaxComplete(function() {
        $('#ajaxloader').fadeOut(250);
    });

</script>
@stack('scripts')
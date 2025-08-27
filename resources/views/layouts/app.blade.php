<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SMPN 1 Sumenep</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.css') }}">
    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
</head>

<body>
    @include('sweetalert::alert')
    <div class="wrapper">
        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="main-panel">
            @yield('content')
            @include('layouts.footer')
        </div>

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- jQuery Sparkline -->
        <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Chart Circle -->
        <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Bootstrap Notify -->
        <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

        <!-- jQuery Vector Maps -->
        <script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Atlantis JS -->
        <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                if (sessionStorage.getItem('success')) {
                    let data = sessionStorage.getItem('success');
                    toastr.success('', data, {
                        timeOut: 1500,
                        preventDuplicates: true,
                        progressBar: true,
                        positionClass: 'toast-top-right',
                        // Redirect
                    });

                    sessionStorage.clear();
                }

                const error = '{{ session('error') }}';
                if (error) {
                    toastr.error('', error, {
                        timeOut: 1500,
                        preventDuplicates: true,
                        progressBar: true,
                        positionClass: 'toast-top-right',
                        // Redirect
                    });

                    sessionStorage.clear();
                }

                const success = '{{ session('success') }}';
                if (success) {
                    var content = {};
                    content.message = success;
                    content.title = 'success';
                    content.icon = 'fa fa-check';

                    $.notify(content, {
                        type: "success",
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        animate: {
                            enter: 'animated fadeInRight',
                            exit: 'animated fadeOutRight'
                        },
                        time: 1000,
                        delay: 3000,
                    });

                    sessionStorage.clear();
                }
            })
        </script>
        @yield('script')
</body>

</html>

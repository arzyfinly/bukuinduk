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
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis-advance.css') }}">
    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <div class="text-center mt--4">
                <img src="{{ asset('assets/img/header.jpeg') }}" width="350px" class="rounded">
            </div>
            <hr>
            <h4 class="text-center">Login to Admin</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="name" type="text"
                            class="form-control input-border-bottom @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label for="username" class="placeholder">Username</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" type="password"
                            class="form-control input-border-bottom @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        <label for="password" class="placeholder">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-action mb-0">
                        <button type="submit" class="btn btn-success btn-rounded btn-login">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

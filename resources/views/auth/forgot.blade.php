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
            <h4 class="text-center">Lupa Password</h4>
            <form method="POST" action="{{ route('post-forgot-password') }}">
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="email" type="email"
                            class="form-control input-border-bottom @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="useremail" class="placeholder">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="new_password" type="password"
                            class="form-control input-border-bottom @error('new_password') is-invalid @enderror"
                            name="new_password" required autocomplete="current-new_password">
                        <label for="new_password" class="placeholder">Password Baru</label>
                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="confirm_password" type="password"
                            class="form-control input-border-bottom @error('confirm_password') is-invalid @enderror"
                            name="confirm_password" required autocomplete="current-confirm_password">
                        <label for="confirm_password" class="placeholder">Konfirmasi Passowrd</label>
                        @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="code" type="text"
                            class="form-control input-border-bottom @error('code') is-invalid @enderror" name="code"
                            required>
                        <label for="code" class="placeholder">Kode Reset</label>
                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-action mb-0">
                        <button type="submit" class="btn btn-success btn-rounded btn-login">
                            {{ __('Simpan') }}
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

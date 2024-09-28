<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Dapoer Dindra</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    <link rel="shortcut icon" href="{{ asset('assets2/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/selectize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/style.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <section class="vh-100 d-flex align-items-center" style="background-color: #a333ff">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="login_page bg-white shadow-lg rounded p-4"
                        style="box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 6px 6px rgba(0, 0, 0, 0.1);">
                        <div class="text-center">
                            <span class="app-brand-text demo menu-text fw-bold ms-2 fs-6 mt-1"
                                style="font-family: 'Poppins', sans-serif;
                                   font-size: 12px; /* Ukuran font disesuaikan */
                                   color: #a333ff;
                                   text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                                   letter-spacing: 1.5px;
                                   text-transform: uppercase;">
                                Dapoer Dindra
                            </span>
                        </div>
                        <form class="login-form" action="{{ route('register') }}" method="POST"
                            style="margin-top: 10px">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap"
                                            name="nama_lengkap" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Alamat<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Alamat"
                                            name="alamat" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>No Handphone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan No Handphone"
                                            name="no_hp" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>No Registrasi<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan No Registrasi"
                                            name="no_registrasi" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Username<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Username"
                                            name="username" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password"
                                            name="password" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Konfirmasi Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password"
                                            name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn w-100"
                                    style="background-color: #a333ff; color:white">Register</button>
                            </div>

                            <div class="text-center mt-3">
                                <p class="mb-0">
                                    <small class="text-dark me-2">Sudah punya akun?</small>
                                    <a href="{{ route('login') }}" class="text-dark font-weight-bold">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('assets2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets2/js/plugins.js') }}"></script>
    <script src="{{ asset('assets2/js/selectize.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets2/js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Toastr options (optional)
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Set posisi pop-up
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000", // Waktu untuk pop-up tetap muncul
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if (session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}');
        @endif
    </script>
</body>

</html>

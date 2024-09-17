<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Dapoer Dindra</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/selectize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/style.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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

    <section class="vh-100" style="background-color: rgb(203, 197, 208)">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Login</h4>
                                </div>
                                <form class="login-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Username<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    name="username" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary w-100" type="submit">Masuk
                                            </button>
                                        </div>

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3">
                                                <small class="text-dark me-2">Tidak punya akun?</small>
                                                <a href="{{ route('register') }}"
                                                    class="text-dark font-weight-bold">Buat akun</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

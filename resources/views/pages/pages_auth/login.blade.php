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
    <div class="background-food"></div>

    <section class="vh-100 d-flex align-items-center" style="background-color: #a333ff">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="login-page bg-white shadow-lg rounded p-4"
                        style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);">
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
                        <form class="login-form" method="POST" action="{{ route('login') }}" style="margin-top:10px">
                            @csrf
                            <div class="form-group position-relative">
                                <label for="username">Username<span class="text-danger">*</span></label>
                                <input type="text" id="username" class="form-control"
                                    placeholder="Enter your username" name="username" required>
                            </div>

                            <div class="form-group position-relative">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" class="form-control"
                                    placeholder="Enter your password" name="password" required>
                            </div>

                            <div class="col-lg-12 mb-0">
                                <button type="submit" class="btn w-100"
                                    style="background-color: #a333ff; color:white">Login</button>
                            </div>

                            <div class="col-12 text-center">
                                <p class="mb-0 mt-3">
                                    <small class="text-dark me-2">Don’t have an account?</small>
                                    <a href="{{ route('register') }}" class="text-dark font-weight-bold">Create one</a>
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

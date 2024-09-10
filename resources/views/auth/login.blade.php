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
    {{-- <link href="{{ asset('assets2/plugins/toastr/css/toastr.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- <style>
        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            width: 300px;
        }
    </style> --}}
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

    <section class="vh-100" style="background-color:blueviolet">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">

                            {{-- @if (session('success'))
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        toastr.success("{{ session('success') }}", 'Success', {
                                            closeButton: true,
                                            positionClass: 'toast-top-right',
                                            timeOut: 5000
                                        });
                                    });
                                </script>
                            @endif --}}

                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Login</h4>
                                </div>
                                <form class="login-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email"
                                                    name="email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <p class="float-end forgot-pass">
                                                <a href="recovery_passward.html" class="text-dark font-weight-bold">
                                                    Forgot password ?
                                                </a>
                                            </p>
                                        </div>

                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary w-100" type="submit">Sign
                                                in</button>
                                        </div>

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3">
                                                <small class="text-dark me-2">Don't have an account?</small>
                                                <a href="{{ route('register') }}"
                                                    class="text-dark font-weight-bold">Sign Up</a>
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
    {{-- <script src="{{ asset('assets2/plugins/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/toastr/js/toastr.init.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>

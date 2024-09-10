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
                        <div class="col-md-8">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Sign up</h4>
                                </div>
                                <form class="login-form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Full Name"
                                                    name="name" required>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm Password" name="password_confirmation"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary w-100">Register</button>
                                        </div>

                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3">
                                                <small class="text-dark me-2">Already have an account?</small>
                                                <a href="{{ route('login') }}" class="text-dark font-weight-bold">Sign
                                                    in</a>
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
</body>

</html>

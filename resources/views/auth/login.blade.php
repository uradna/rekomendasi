<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-layout-mode="detached" data-menu-color="light" data-topbar-color="brand"
    data-layout-position="scrollable" data-sidenav-size="default" class="menuitem-active">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Theme Config Js -->
    <script src="js/hyper-config.js"></script>

    <!-- App css -->
    <link href="css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style">

    <!-- Icons css -->
    <link href="css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body class="authentication-bg position-relative" style="background: none;">
    <div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800">
            <g fill-opacity="0.22">
                <circle style="fill: rgba(var(--ct-brand-rgb), 0.1);" cx="400" cy="400" r="600"></circle>
                <circle style="fill: rgba(var(--ct-brand-rgb), 0.2);" cx="400" cy="400" r="500"></circle>
                <circle style="fill: rgba(var(--ct-brand-rgb), 0.3);" cx="400" cy="400" r="300"></circle>
                <circle style="fill: rgba(var(--ct-brand-rgb), 0.4);" cx="400" cy="400" r="200"></circle>
                <circle style="fill: rgba(var(--ct-brand-rgb), 0.5);" cx="400" cy="400" r="100"></circle>
            </g>
        </svg>
    </div>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header py-4 text-center bg-brand">
                            <a href="#">
                                <span><img src="images/logo.png" alt="logo" height="22"></span>
                            </a>
                        </div>

                        <div class="card-body p-4 pb-3">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Log In</h4>
                                <p class="text-muted mb-4">Masukkan alamat email dan password.
                                </p>

                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <x-label for="email" :value="__('Email')" />
                                    <input class="form-control" id="email" type="text" name="email"
                                        value="{{ old('email') }}" required="" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <a href="{{ Route('password.request') }}"
                                        class="text-muted float-end"><small>Lupa password?</small></a>
                                    <x-label for="password" :value="__('Password')" />
                                    <div class="input-group input-group-merge">
                                        <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}"
                                            placeholder="">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mb-3">
                                    @if (isset($errors->get('email')[0]))
                                        <label class="form-check-label text-brand">{{ $errors->get('email')[0] }}</label>
                                    @else
                                        &nbsp;
                                    @endif
                                    {{-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin"
                                            checked="checked">
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div> --}}
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    {{-- 
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a
                                    href="https://coderthemes.com/hyper/saas/pages-register.html"
                                    class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">

    </footer>
    <!-- Vendor js -->
    <script src="js/vendor.min.js"></script>
    <script src="js/app.min.js"></script>



</body>

</html>

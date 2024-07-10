<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-layout-mode="detached" data-menu-color="light" data-topbar-color="brand"
    data-layout-position="fixed" data-sidenav-size="default" class="menuitem-active">
{{-- data-sidenav-size="default" --}}
{{-- data-sidenav-size="condensed" --}}
{{-- data-layout-position="fixed" --}}
<!-- KECAMATAN -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    {{ $topscript }}

    <script src="{{ asset('js/hyper-config.js') }}"></script>

    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">



    @vite(['resources/js/app.js'])
</head>

<body class="show">
    {{-- <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>

            </div>
        </div>
    </div> --}}

    <div class="wrapper">
        @include('layouts.top-nav')
        @include('layouts.kecamatan.side-nav')

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        {{ $map }}
                                    </ol>
                                </div>
                                <h4 class="page-title">{{ $header }}</h4>
                            </div>

                        </div>
                    </div>

                    {{ $slot }}

                </div>

            </div>

            @include('layouts.footer')

        </div>
    </div>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/app.tools.js') }}"></script>
    {{ $bottomscript }}

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Favicon icon -->
        <link rel="icon" href={{ asset('admin/images/favicon.ico') }} type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <!-- waves.css -->
        <link rel="stylesheet" href={{ asset('admin/pages/waves/css/waves.min.css') }} type="text/css" media="all">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href={{ asset('admin/css/bootstrap/css/bootstrap.min.css') }}>
        <!-- waves.css -->
        <link rel="stylesheet" href={{ asset('admin/pages/waves/css/waves.min.css') }} type="text/css" media="all">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href={{ asset('admin/icon/themify-icons/themify-icons.css') }}>
        <!-- font-awesome-n -->
        <link rel="stylesheet" type="text/css" href={{ asset('admin/css/font-awesome-n.min.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('admin/css/font-awesome.min.css')}}>
        <!-- scrollbar.css -->
        <link rel="stylesheet" type="text/css" href={{ asset('admin/css/jquery.mCustomScrollbar.css') }}>
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href={{ asset('admin/css/style.css') }}>
    </head>

    <body class="font-sans antialiased">
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">

                @include('layouts.partials.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('layouts.partials.navbar')
        
                    <div class="pcoded-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
        <script type="text/javascript" src={{ asset('admin/js/jquery/jquery.min.js') }}></script>
        <script type="text/javascript" src={{ asset('admin/js/jquery-ui/jquery-ui.min.js') }}></script>
        <script type="text/javascript" src={{ asset('admin/js/popper.js/popper.min.js') }}></script>
        <script type="text/javascript" src={{ asset('admin/js/bootstrap/js/bootstrap.min.js') }}></script>
        <!-- waves js -->
        <script src={{ asset('admin/pages/waves/js/waves.min.js') }}></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src={{ asset('admin/js/jquery-slimscroll/jquery.slimscroll.js') }}></script>

        <!-- slimscroll js -->
        <script src={{ asset('admin/js/jquery.mCustomScrollbar.concat.min.js') }}></script>

        <!-- menu js -->
        <script src={{ asset('admin/js/pcoded.min.js') }}></script>
        <script src={{ asset('admin/js/vertical/vertical-layout.min.js') }}></script>
        <script type="text/javascript" src={{ asset('admin/js/script.js') }}></script>
</html>
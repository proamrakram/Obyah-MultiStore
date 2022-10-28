
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- simplebar -->
        <link href="{{asset('assets/css/simplebar.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/tabler-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Css -->
        <link href="{{asset('assets/css/style-rtl.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


        @yield('style')
    </head>
    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <div class="page-wrapper landrick-theme toggled">

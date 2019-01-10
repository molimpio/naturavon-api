<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="shortcut icon" href="{{ asset(env('PATH_ASSETS').'images/naturavon.ico') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap Core CSS {{ asset('css/app.css') }} -->
    <link href="{{ asset(env('PATH_ASSETS').'css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset(env('PATH_ASSETS').'css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset(env('PATH_ASSETS').'css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset(env('PATH_ASSETS').'css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset(env('PATH_ASSETS').'css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset(env('PATH_ASSETS').'css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- jQuery -->
    <script src="{{ asset(env('PATH_ASSETS').'js/jquery.min.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset(env('PATH_ASSETS').'js/bootstrap.min.js') }} "></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset(env('PATH_ASSETS').'js/metisMenu.min.js') }} "></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset(env('PATH_ASSETS').'js/startmin.js') }} "></script>
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   


    {{-- beda --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>


    <!-- Bootstrap CSS -->    
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- bootstrap theme -->
    <link href=" {{ asset('backend/css/bootstrap-theme.css') }} " rel="stylesheet">

    <!--external css-->
    <!-- font icon -->
    <link href=" {{ asset('backend/css/elegant-icons-style.css') }} " rel="stylesheet" />
    <link href=" {{ asset('backend/css/font-awesome.css') }} " rel="stylesheet" />

    <!-- Custom styles -->
    <link href=" {{ asset('backend/css/style.css') }} " rel="stylesheet">
    <link href=" {{ asset('backend/css/style-responsive.css') }} " rel="stylesheet" />

    {{-- {{ url('backend/Dashboard_admin/js/jquery-1.11.1.min.js') }}     --}}

    {{-- Javasctript --}}



</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

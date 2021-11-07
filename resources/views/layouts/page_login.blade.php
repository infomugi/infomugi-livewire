<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <title>App Name - @yield('pageTitle')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Muze Dashboard">
    <meta name="keywords" content="Muze Dashboard">
    <meta name="author" content="Muze Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="{!! asset('backend/muze/assets/vendor/simplebar/dist/simplebar.min.css') !!}" rel="stylesheet" type="text/css" media="all">
    <link href="{!! asset('backend/muze/assets/css/theme.min.css') !!}" rel="stylesheet" type="text/css" media="all">
    @livewireStyles
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>  
    
</head>
<body class="signup-simple-template bg-gray-100">
    
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{!! asset('backend/muze/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
    
    
</body>
</html>
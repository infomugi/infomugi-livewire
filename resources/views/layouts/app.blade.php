<!DOCTYPE html>
<html lang="en">
<head>
    <title>App Name - @yield('pageTitle')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Good - Bootstrap 5 HTML Admin Dashboard Template" />
    <meta property="og:url" content="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template" />
    <meta property="og:site_name" content="Keenthemes | Good" />
    <link rel="canonical" href="https://preview.keenthemes.com/good" />
    <link rel="shortcut icon" href="{!! asset('backend/assets/media/logos/favicon.ico') !!}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{!! asset('backend/assets/plugins/global/plugins.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/assets/css/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
    @livewireStyles
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>  
    
</head>
<body id="kt_body" class="auth-bg">
    
    @yield('content')
    
    <script src="{!! asset('backend/assets/plugins/global/plugins.bundle.js') !!}"></script>
    <script src="{!! asset('backend/assets/js/scripts.bundle.js') !!}"></script>
    
    <script>
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}')
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}')
        @endif
    </script>
    
</body>
</html>
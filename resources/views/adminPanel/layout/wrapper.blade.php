<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="شروع برنامه نویسی با یک پنل مدیریت طراحی شده با Bootstrap 4">
    <meta name="author" content="Creative Tim">
    <title>پنل مدیریتی | @yield('pageTitle')</title>
    <!-- Favicon -->
    <link href="{{asset('adminPanel/img/brand/favicon.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('adminPanel/vender/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('adminPanel/vender/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('adminPanel/css/argon.css')}}" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{url('adminPanel/dist/css/bootstrap-rtl.min.css')}}">
    @yield('headerLinks')
    @yield('headerScripts')
</head>
<body>
<!-- Sidenav -->
@include('adminPanel.layout.sidenav.sidenav')
<div class="main-content">

    <!-- Main content -->
    @yield('mainContent')

</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('adminPanel/vender/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('adminPanel/vender/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('adminPanel/vender/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('adminPanel/vender/chart.js/dist/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('adminPanel/js/argon.js')}}"></script>
@yield('footerScripts')
</body>
</html>

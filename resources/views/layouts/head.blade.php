<title>@yield('title')</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

<!-- iCheck -->
<link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">

<!-- Theme style -->
{{--<link rel="stylesheet" href="dist/css/adminlte.min.css">--}}
<link rel="stylesheet" href="{{asset('assets/css/adminlte.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

<!-- Daterange picker -->

<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

<!-- summernote -->
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
<style>
    body{

        background-color: #f1f1f1;
    }
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link{
        background-color: #17A2B8;
    }
    .dropdown-menu{
        top: 60px;
        right: 0px;
        left: unset;
        width: 460px;
        box-shadow: 0px 5px 7px -1px #c1c1c1;
        padding-bottom: 0px;
        padding: 0px;
    }
    .dropdown-menu:before{
        content: "";
        position: absolute;
        top: -20px;
        right: 12px;
        border:10px solid #343A40;
        border-color: transparent transparent #343A40 transparent;
    }
    .head{
        padding:5px 15px;
        border-radius: 3px 3px 0px 0px;
    }
    .footer{
        padding:5px 15px;
        border-radius: 0px 0px 3px 3px;
    }
    .notification-box{
        padding: 10px 0px;
    }
    .bg-gray{
        background-color: #eee;
    }
    @media (max-width: 640px) {
        .dropdown-menu{
            top: 50px;
            left: -16px;
            width: 290px;
        }
        .nav{
            display: block;
        }
        .nav .nav-item,.nav .nav-item a{
            padding-left: 0px;
        }
        .message{
            font-size: 13px;
        }
    }
</style>
@yield('css')

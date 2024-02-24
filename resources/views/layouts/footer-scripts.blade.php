<?php
use Illuminate\Support\Facades\URL;
//use  App\Http\Controllers\Url;
?>

<!-- jQuery -->

<script src="{{Url::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{Url::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{Url::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{Url::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{Url::asset('assets/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<script src="{{Url::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>

<script src="{{Url::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{Url::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{Url::asset('assets/plugins/moment/moment.min.js')}}"></script>

<script src="{{Url::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{Url::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->
<script src="{{Url::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{Url::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{Url::asset('assets/js/adminlte.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{Url::asset('assets/s/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{Url::asset('assets/js/pages/dashboard.js')}}"></script>

@yield('script')

<?php
use App\Models\User;

use App\Models\Admin;
use Illuminate\Support\Facades\URL;

use App\Models\Department;
?>

@extends('layouts.master')

@section('css')


    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


@endsection

@section('script')

    <!-- DataTables  & Plugins -->
    <script src="{{Url::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>

    <script src="{{Url::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{Url::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{Url::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>


    <script src="{{Url::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>



    <script src="{{Url::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{Url::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
@section('title_dashboard')
    Order Page
@endsection
@section('title')
    Order Page
@endsection

@section('title_page')
    Order

@endsection

@section('title_page2')
    Show {{$title}}
@endsection

@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Dealer</th>
                                    <th>From</th>
                                    <th>To</th>

                                    <th>From Time</th>
                                    <th>To Time</th>
                                    <th> NaerFrom </th>
                                    <th>Naer To</th>
                                    <th>Implemented</th>
                                    <th>Show Offers</th>


                                </tr>
                                </thead>
                                <tbody>


                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row"> {{$user->id}}</th>
                                        <td>{{$user->title}}</td>
                                        <td>{{$user->type}}</td>

                                        <td><a  href="{{route('user.show_user',$user->owner->id)}}">{{$user->owner->name}}</a></td>



                                        <td>{{ $user->from}}</td>
                                        <td>{{ $user->to}}</td>
                                        <td>{{ $user->from_time}}</td>
                                        <td>{{ $user->to_time}}</td>
                                        <td>{{ $user->near_from}}</td>
                                        <td>{{ $user->near_to}}</td>
                                        <td>{{ $user->implemented== '0'?'wating':'done' }}</td>

                                        <td><a class="btn btn-primary" href="{{route('order.show_offer',$user->id)}}"
                                               role="button">Show Offers</a></td>
                                        {{--                <td>{{$user->where('dep_id','== ','$user->dep_id')->where('jop_type','=','manager',)->first()->id}}</td>--}}


                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>

                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Dealer</th>
                                    <th>From</th>
                                    <th>To</th>

                                    <th>From Time</th>
                                    <th>To Time</th>
                                    <th> NaerFrom </th>
                                    <th>Naer To</th>
                                    <th>Implemented</th>
                                    <th>Show Offers</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection



































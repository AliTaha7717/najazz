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
                "paging": true,
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
    Admin Dashboard
@endsection
@section('title')
    User Page
@endsection

@section('title_page')
    User

@endsection

@section('title_page2')
    Show User
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

                                    <th>offer_id</th>
                                    <th>Price</th>
                                    <th>continued</th>
                                    <th>rest</th>
                                    <th>commission</th>
                                    <th>Edit</th>



                                </tr>
                                </thead>
                                <tbody>


                                @foreach($date as $item)

                                    <tr>
                                        <th scope="row"> {{$item->id}}</th>

                                        <td>{{$item->offer->id}}</td>
                                        <td>{{$item->offer->price}}</td>
                                        <td>{{$item->continued}}</td>


                                        <td>{{ $item->rest}}</td>
                                        <td>{{ $item->commission }}</td>






                                        <td><a class="btn btn-primary" href="{{route('bill.edit',$item->id)}}" role="button">Edit</a></td>


                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>offer_id</th>
                                    <th>Price</th>

                                    <th>continued</th>
                                    <th>rest</th>
                                    <th>commission</th>
                                    <th>Edit</th>
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



































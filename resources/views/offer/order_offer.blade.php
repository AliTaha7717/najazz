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
Offer Page
@endsection
@section('title')
    Offer page
@endsection
@section('title_page2')
    Show {{$stute}}
@endsection


@section('title_page')
    Offer

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

                                    <th>driver</th>
                                    <th>drive phone</th>

                                    <th>Dealer</th>
                                    <th>Dealer phone</th>
                                    <th>price</th>
                                    <th>Accped</th>
                                    <th> Dealer Implemented</th>
                                    <th> Bill</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($date as $item)
{{--                                Show Order_offer--}}




    <tr>
                                        <th scope="row"> {{$item->id}}</th>
        <td><a  href="{{route('user.show_user',$item->driver->id)}}">{{$item->driver->name}}</a></td>

        <td>{{$item->driver->phone}}</td>
        <td><a  href="{{route('user.show_user',$item->order->owner->id)}}">{{$item->order->owner->name}}</a></td>

        <td>{{$item->order->owner->phone}}</td>


                                        <td>{{ $item->price}}</td>
        <td>{{ $item->accepted== '0'?'wating':'accepted	'}}</td>
        <td>{{$item->implemented	 == 0 ?'wating':'implemented'}}</td>
        <td><a class="btn btn-primary" href="{{route('bill.show',$item->id)}}" role="button">Bill</a></td>




@endforeach



                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>

                                    <th>driver</th>
                                    <th>drive phone</th>

                                    <th>Dealer</th>
                                    <th>Dealer phone</th>
                                    <th>price</th>
                                    <th>Accped</th>
                                    <th>Dealer Implemented</th>
                                    <th> Bill</th>
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



































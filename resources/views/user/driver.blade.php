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

                                    <th>Name</th>

                                    <th>phone</th>
                                    <th>type_acount</th>
                                    <th>type</th>
                                    <th>ID Card</th>
                                    <th>License</th>
                                    <th>Guild card</th>
                                    <th>Orders Or Offers</th>



                                </tr>
                                </thead>
                                <tbody>


                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row"> {{$user->id}}</th>
                                        <td>{{$user->name}}</td>



                                        <td>{{ $user->phone}}</td>
                                        <td>{{ $user->type_acount }}</td>
                                        <td>{{ $user->driver->type ??''}}</td>
                                        <td> <a class="   {{$user->has_id==0 ?'btn btn-danger':'btn btn-success'}}"

                                                role="button" aria-disabled="">
                                                {{$user->has_id== 0?'Unxisting':'Existing'}}</a>

                                            <a class="   {{$user->has_id== 0?'btn btn-primary':''}}"
                                               href="{{$user->has_id==0?route('user.edit_cardid',$user->id)
                                        :''}}"
                                               role="button" aria-disabled="">
                                                {{$user->has_id==0?'Chick':''}}</a></td>

                                        <td> <a class="   {{$user->driver->has_dl==0?'btn btn-danger':'btn btn-success'}}"
                                                role="button" aria-disabled="">
                                                {{$user->driver->has_dl== 0?'Unxisting':'Existing'}}</a>
                                            <a class="   {{$user->driver->has_dl== 0?'btn btn-primary':''}}"
                                               href="{{$user->driver->has_dl==0 ?route('user.edit_license',$user->id) :''}}"
                                               role="button" aria-disabled="">
                                                {{$user->driver->has_dl==0?'Chick':''}}</a>
                                        </td>

                                        <td> <a class="   {{$user->driver->verified==0?'btn btn-danger':'btn btn-success'}}"
                                                role="button" aria-disabled="">
                                                {{$user->driver->verified==0?'Unxisting':'Existing'}}</a>
                                            <a class="   {{$user->driver->verified==0?'btn btn-primary':''}}"
                                               href="{{$user->driver->verified==0?route('user.edit_verified',$user->id) :''}}"
                                               role="button" aria-disabled="">
                                                {{$user->driver->verified==0?'Chick':''}}</a>
                                        </td>


                                        <td><a class="btn btn-primary"
                                               href="{{$user->type_acount=='dealer'?route('user.show',$user->id)
                                        :route('user.show_offer',$user->id)}}"
                                               role="button" aria-disabled="">
                                                {{$user->type_acount=='dealer'?'Sohw Order':'Sohw Offer'}}</a></td>



                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>

                                    <th>Name</th>

                                    <th>phone</th>
                                    <th>type_acount</th>
                                    <th>type</th>
                                    <th>ID Card</th>
                                    <th>License</th>
                                    <th>Guild card</th>
                                    <th>Orders Or Offers</th>


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



































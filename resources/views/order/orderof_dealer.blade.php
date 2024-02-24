<?php
use App\Models\User;

use App\Models\Admin;


use App\Models\Department;
?>

@extends('layouts.master')

@section('css')
@endsection
@section('script')

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

                                    <th>Type</th>
                                    <th>Dealer</th>
                                    <th>From</th>
                                    <th>To</th>

                                    <th>From Time</th>
                                    <th>To Time</th>
                                    <th>Implemented</th>
                                    <th>Edit</th>

                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>


                                @foreach($users->orders as $user)

                                    <tr>
                                        <th scope="row"> {{$user->id}}</th>
                                        <td>{{$user->type}}</td>
                                        <td>{{$user->owner->name}}</td>



                                        <td>{{ $user->from}}</td>
                                        <td>{{ $user->to}}</td>
                                        <td>{{ $user->from_time}}</td>
                                        <td>{{ $user->to_time}}</td>
                                        <td>{{ $user->implemented== '0'?'wating':'done' }}</td>


                                        {{--                <td>{{$user->where('dep_id','== ','$user->dep_id')->where('jop_type','=','manager',)->first()->id}}</td>--}}
                                        <td><a class="btn btn-primary" href="{{route('order.edit',$user->id)}}" role="button">Edit</a></td>
                                        <td> <form action="{{route('order.destroy',$user->id)}}" method="post">

                                                @method('DELETE')
                                                @csrf
                                                <button   class="btn btn-danger"role="button"> Delete </button>



                                            </form></td>

                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>

                                    <th>Type</th>
                                    <th>Dealer</th>
                                    <th>From</th>
                                    <th>To</th>

                                    <th>From Time</th>
                                    <th>To Time</th>
                                    <th>Implemented</th>
                                    <th>Edit</th>

                                    <th>Delete</th>
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
    </section>@endsection















{{--<html>--}}

{{--<title>ALL Employee</title>--}}

{{--<head>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
{{--</head>--}}

{{--<body>--}}
{{--<h1>All Users</h1>--}}
{{--<br>--}}
{{--<td><a class="btn btn-primary" href="{{route('dashboard')}}" role="button">Home Page</a></td>--}}
{{--<br>--}}
{{--<td><a class="btn btn-danger" href="{{route('post.deleteALL')}}" role="button">DeleteAll</a></td>--}}
{{--<td><a class="btn btn-danger" href="{{route('post.deleteTRUNCUT')}}" role="button">DeleteAll</a></td>--}}
{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">Name</th>--}}
{{--        <th scope="col">Email</th>--}}

{{--        <th scope="col">Jop_Type</th>--}}
{{--        <th scope="col">Depratment Name</th>--}}
{{--        <th scope="col">Company Name</th>--}}
{{--        <th scope="col">Manager Name</th>--}}
{{--        <th scope="col">Edit</th>--}}
{{--        <th scope="col">Delete</th>--}}


{{--    </tr>--}}
{{--    </thead>--}}













{{--        @foreach($users as $user)--}}
{{--            @php--}}


{{-- @endphp--}}

{{--            <tr>--}}
{{--                <th scope="row"> {{$user->id}}</th>--}}
{{--                <td>{{$user->name}}</td>--}}
{{--                <td>{{$user->email}}</td>--}}

{{--                <td>{{$user->jop_type}}</td>--}}
{{--                <td>{{ $user->department->name}}</td>--}}
{{--                <td>{{ $user->department->company->name}}</td>--}}
{{--                <td>{{  User::where('dep_id','=',$user->dep_id)->where('jop_type','=','manager',)->first()->name}}</td>--}}


{{--                <td>{{$user->where('dep_id','== ','$user->dep_id')->where('jop_type','=','manager',)->first()->id}}</td>--}}
{{--                <td><a class="btn btn-primary" href="{{route('user.edit',$user->id)}}" role="button">Edit</a></td>--}}
{{--                <td> <form action="{{route('user.destroy',$user->id)}}" method="post">--}}

{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button   class="btn btn-danger"role="button"> Delete </button>--}}



{{--                    </form></td>--}}

{{--                @endforeach--}}



{{--                <tbody>--}}

{{--        </tr>--}}
{{--        </tr>--}}

{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}

{{--</html>--}}




















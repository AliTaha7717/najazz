<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <html>

        <title>ALL Employee</title>

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>

        <body>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">

                <h2>User Panle</h2>

                <h2>  Welcome: {{Auth::user()->name}}</h2>
                <br>
                <td><a class="btn btn-primary" href="{{route('user.index')}}" role="button">Show Employee</a></td>
                <td><a class="btn btn-primary" href="{{route('user.create')}}" role="button">Add Employee</a></td>
                <br>
                <br>
                <td><a class="btn btn-primary" href="{{route('department.index')}}" role="button">Show Departments</a></td>
                <td><a class="btn btn-primary" href="{{route('department.create')}}" role="button">Add Department</a></td>
                <br>
                <br>
                <td><a class="btn btn-primary" href="{{route('company.index')}}" role="button">Show Campanies</a></td>
                <td><a class="btn btn-primary" href="{{route('company.create')}}" role="button">Add Campany</a></td>

                <br>
                <br>

                <td><a class="btn btn-primary" href="{{route('compliant.index')}}" role="button">Show Compliant Types</a></td>
                <td><a class="btn btn-primary" href="{{route('compliant.create')}}" role="button">Add Compliant</a></td>
                <br>

                <br>
                <td><a class="btn btn-primary" href="{{route('com_user.index')}}" role="button">Show Users Compliant </a></td>
                <td><a class="btn btn-primary" href="{{route('com_user.create')}}" role="button">Add User Compliant</a></td>
                <br>
                <br>
            </div>
        </div>

        {{--<td><a class="btn btn-danger" href="{{route('post.deleteALL')}}" role="button">DeleteAll</a></td>--}}
        {{--<td><a class="btn btn-danger" href="{{route('post.deleteTRUNCUT')}}" role="button">DeleteAll</a></td>--}}

        </body>
        </html>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>


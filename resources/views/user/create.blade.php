
    <?php

    use App\Models\User;
    use App\Models\Department;

    ?>


<html>

<title>Add User</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h1>Add User</h1><br>

<body>
<td><a class="btn btn-primary" href="{{route('dashboard')}}" role="button">Home Page</a></td>
<br>
<form action="{{route('user.store')}}" method="post">
    <br><br>
    @csrf


    <input type="text" name="name" placeholder="Enter Your name" class="@error('name') is-invalid @enderror">

    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <input type="text" name="phone" placeholder="Enter Your phone" class="@error('phone') is-invalid @enderror">

    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <input type="password" name="password" placeholder="Enter Your password" class="@error('password') is-invalid @enderror">

    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>


    <br>
    <br>
    <label >Select Type Account :</label> <br> <br>
    <input type="radio" name="type_acount" value="dealer" class="@error('type_acount') is-invalid @enderror"> Dealer
    <input type="radio" name="type_acount" value="driver"  class="@error('type_acount') is-invalid @enderror"> Driver <br>

    @error('type_acount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>

    <br><br>

    <button  type="submit" name="submit" class="btn btn-primary"role="button"> Add </button>
</form>
</body>
{{--@php--}}
{{--   echo $item->id; @endphp--}}
</html>









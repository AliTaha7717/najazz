
    <?php

    use App\Models\User;
    use App\Models\Department;

    ?>


<html>

<title>Add Order</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h1>Add Order</h1><br>

<body>
<td><a class="btn btn-primary" href="{{route('dashboard')}}" role="button">Home Page</a></td>
<br>
<form action="{{route('order.store')}}" method="post">

    @csrf


    <label >Select Type Of Width :</label> <br><br>
    <label > خفيف</label>
    <input type="radio" name="type" value="خفيف" class="@error('type') is-invalid @enderror">
    <label > ثقيل</label>
    <input type="radio" name="type" value="ثقيل"  class="@error('type') is-invalid @enderror">
    <br>

    <label >Title :</label> <input type="text" name="title" placeholder="Enter Title " class="@error('title') is-invalid @enderror">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label >Weight :</label> <input type="text" name="weight" placeholder="Enter weight " value=".Kg" class="@error('weight') is-invalid @enderror">
    @error('weight')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label >Type Of Payload :</label> <input type="text" name="type_order" placeholder="Enter Type Of Payload " class="@error('Type Of Payload') is-invalid @enderror">
    @error('Type Of Payload')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <label >user_id :</label> <input type="text" name="user_id" placeholder="Enter user_id " class="@error('user_id') is-invalid @enderror">
    @error('user_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <label >from :</label> <input type="text" name="from" placeholder="Enter from " class="@error('from') is-invalid @enderror">
    @error('from')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label >to :</label> <input type="text" name="to" placeholder="Enter to" class="@error('to') is-invalid @enderror">
    @error('to')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <label >Near_From :</label> <input type="text" name="near_from" placeholder="Enter Near_From " class="@error('near_from') is-invalid @enderror">
    @error('near_from')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label >Near_To :</label> <input type="text" name="near_to" placeholder="Enter Near_To " class="@error('near_to') is-invalid @enderror">
    @error('near_to')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <label >Description :</label> <input type="text" name="description" placeholder="Enter Description" class="@error('description') is-invalid @enderror">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>

    <label >Date of From :</label>  <input type="datetime-local" name="from_time" placeholder="Enter from_time" class="@error('from_time') is-invalid @enderror">
    @error('from_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label >Date of To :</label>  <input type="datetime-local" name="to_time" placeholder="Enter to_time" class="@error('to_time') is-invalid @enderror">
    @error('to_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br><br>






    <br><br>

    <button  type="submit" name="submit" class="btn btn-primary"role="button"> Add </button>
</form>
</body>
{{--@php--}}
{{--   echo $item->id; @endphp--}}
</html>









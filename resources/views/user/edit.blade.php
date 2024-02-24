<?php

use App\Models\User;
use App\Models\Department;

?>


<h2> Edit Your user Date : {{$user->id}}</h2>
<form action="{{route('user.update',$user->id)}}" method="post">

    @method('PATCH')
    @csrf

    <input type="text" name="name" value="{{$user->name}}"><br><br>

    <input type="text" name="phone"  value="{{$user->phone}}"><br><br>
    <input type="text" name="password" value="{{$user->password}}"><br><br>

    <br>
    <label >Select Type Account :</label> <br> <br>
    <input type="radio" name="type_acount" value="dealer"{{$user->type_acount=='dealer' ?'checked':'' }} class="@error('type_acount') is-invalid @enderror"> Dealer
    <input type="radio" name="type_acount" value="driver"{{$user->type_acount=='driver' ?'checked':'' }}  class="@error('type_acount') is-invalid @enderror"> Driver <br>

    @error('type_acount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>

    <br><br>














{{--    <h3>Select Your Jop Type</h3>--}}
{{--    <h4>{{$user->jop_type}}</h4>--}}
{{--    <input type="radio" name="jop_type"  value="manager">Manager--}}
{{--    <input type="radio" name="jop_type"  value="employee">Employee<br>--}}
{{--    <h3>Select Your Depratment</h3>--}}
{{--    <h4>{{$user->dep_id}}</h4>--}}

{{--    @foreach(Department::all() as $items)--}}

{{--        <input type="radio" name="dep_id" value="{{$items->id}}" >{{$items->name}}--}}


{{--    @endforeach--}}
    <br><br>
    <button type="submit" name="submit" >Eidt</button>
</form>

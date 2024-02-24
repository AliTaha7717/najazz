<?php

use App\Models\User;
use App\Models\Department;

?>


<h2> Edit Your Bill Date : {{$date->id}}</h2>
<form action="{{route('bill.update'),}}" method="post">

{{--    @method('PATCH')--}}
    @csrf

    <label >Bill number</label>
    <input type="text" name="id"  value="{{ $date->id}}"><br><br>

    <label >Bill Offer id</label>
    <input type="text" name="offer_id"  value="{{$date->offer->id}}"><br><br>
    <br>
    <label >Bill rest</label>
    <input type="text" name="rest"    value="{{$date->rest}}"><br><br>
    <label >Bill commission</label>
    <input type="text" name="commission"  value="{{$date->commission}}"><br><br>
    <label >Bill continued</label>
    <input type="text" name="continued"  value="{{$date->continued}}"><br><br>
    <label >Bill price</label>
    <input type="text" name="price"  value="{{$date->offer->price}}"><br><br>
    <br>
    <br><br>
    <button type="submit" name="submit" >Eidt</button>
</form>

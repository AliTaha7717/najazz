<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function owner()
    {
       return $this->belongsTo(User::class,'user_id');
    }
    public function offer()
    {
        return $this->hasMany(Offer::class,'order_id');
    }

//    public function created()
//    {
//
//
//    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    use HasFactory ;
    protected $fillable=[
        'user_id',
        'order_id',
        'price'
    ];
    public function driver()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

//    public function users()
//    {
//        return $this->hasManyThrough(User::class,Department::class,'company_id','dep_id');
//    }

//    public function dealer_offer ()
//    {
//        return $this->hasoneThrough(User::class,Order::class,'user_id',);
//    }

      public function bill()
      {
          return $this->belongsTo(User::class,'offer_id');
      }
}

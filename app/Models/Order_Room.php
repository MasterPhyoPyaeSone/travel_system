<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Room extends Model
{
    use HasFactory;
    protected $fillable = ['adult','child','user_id','room_id','room_img','hotel_name','room_price','room_type','startDate','endDate','issendmail','pay_img','confirm','total_price'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

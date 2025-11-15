<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_type','intro','body','price','hotel_id',
    'img_1','img_2','img_3','img_4','img_5'];
    public function hotel(){
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
}

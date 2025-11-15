<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Package extends Model
{
    use HasFactory;
    protected $fillable = ['adult','child','user_id','package_id','package_img','package_title','package_price','startDate','endDate','issendmail','pay_img','confirm','total_price'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    // public function package(){
    //     return $this->hasMany(Package::class);
    // }

}

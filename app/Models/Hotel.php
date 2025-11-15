<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=['name','price','intro','body','package_id','place','category_id',
    'img_1','img_2','img_3','img_4'
     ,'img_5','img_6','img_7','img_8','img_9','img_10'];


    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function rooms(){
      return $this->hasMany(Room::class,'hotel_id');
    }
    public function comments(){
      return $this->hasMany(HotelComment::class,'hotel_id');
  }

    public static function scopeFilter($hotelQuery,$filters = []){
        // $filter=$filters['place'];
        // dd($filters);
      if($filter=$filters['search'] ?? null){
        $hotelQuery->where(function($query) use ($filter){
            $query->where('name','LIKE','%'.$filter.'%')
                  ->orWhere('place','LIKE','%'.$filter.'%');
                  // ->orWhere('price','LIKE',$filter);
        });
      }

      if($filter=$filters['price'] ?? null){
        $hotelQuery->where(function($query) use ($filter){
            $query->where('price','LIKE',$filter);
                  
        });
      }
      if($filter=$filters['personal'] ?? null){
        $hotelQuery->where(function($query) use ($filter){
            $query->where('category_id','LIKE',$filter);
                  
        });
      }  

    }
}

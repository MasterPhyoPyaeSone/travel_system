<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable=['title','price','intro','body','category_id','date',   
    'long_time','place','img_1','img_2','img_3','img_4','img_5',];
    use HasFactory;

    public function hotels(){
         return $this->hasMany(Hotel::class,'package_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'package_id');
    }

    public function favoriate_users(){
        return $this->belongsToMany(User::class,'package_user');
    }

    public function Package_order(){
        // return $this->belongsTo(Package_order::class,'package_id');
    }

   public static function scopeFilter($packageQuery,$filter=[]){
    // dd($filter['search']);
    // dd($filter);
    // if($filter=$filter['date'] ?? null){
    //     $packageQuery->where(function($query) use ($filter){
    //         $query->where('date','LIKE',$filter);
                  
    //     });
    //   } 

    if($search=$filter['search'] ?? null){
        $packageQuery->where(function($query) use ($search){           
            $query->where('title','LIKE','%'.$search.'%')
                 ->orWhere('place','LIKE','%'.$search.'%');
        });
    }
       
     if($search=$filter['price'] ?? null){
                $packageQuery->where(function($query) use ($search){
                    $query->where('price','LIKE','%'.$search.'%');
                   
         });        
       
    }
    if($search=$filter['date'] ?? null){
        $packageQuery->where(function($query) use ($search){
            $query->where('date','LIKE','%'.$search.'%');
           
 });        

}
    if($filter=$filter['personal'] ?? null){
        $packageQuery->where(function($query) use ($filter){
            $query->where('category_id','LIKE',$filter);
                  
        });
      } 
    
     
  // return $packageQuery;
   }
}

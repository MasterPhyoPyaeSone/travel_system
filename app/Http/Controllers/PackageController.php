<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Order_Package;
use App\Models\Package;
use App\Models\Package_order;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){

        $filter=request(['search','personal']);  
        return view('home',[
            'packages'=>Package::with('hotels')
            ->filter($filter)
            ->latest()->paginate(3)
            ->withQueryString(),

            'hotels'=>Hotel::
            latest()->paginate(3)
            ->withQueryString()
        ]);
       
       }

       public function package_index(){
        // dd(request()->all());   
        $filter=request(['search','price','personal','date']); 
        // dd($filter); 
        return view('packageIndex',[
            'packages'=>Package::with('hotels','category')
            ->filter($filter)
            ->latest()->paginate(9)
            ->withQueryString()
        ]);
       
       }
    
       public function packageDetail(Package $package){
        // dd($package->hotels()->get());
       return view('packageDetail',[
             'package'=>$package,
             'hotels'=>$package->hotels()->get(),
             'count'=>Order_Package::where('user_id', auth()->user()->id)->count()
            // 'hotels'=>Package::with('hotels')
        ]);
       // return view('packageDetail');
       }

     
  
      
}

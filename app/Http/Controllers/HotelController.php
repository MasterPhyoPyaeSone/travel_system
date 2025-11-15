<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
   //  public function single_hotel_detail($id){
   //      // dd($id);
   //      return view('single_hotel');
   //     }
       
    
       public function hotel_index(Request $request){   
      //   dd(request(['search']));
        
      //  $filter=request(['search','price']);        
         $search=request('search');
          return view('hotelIndex',[    
             'hotels' => Hotel::with('package','category')
             ->filter(request(['search','price']))
             ->paginate(6)
             ->withQueryString() 
          ]);
       }


       public function hotel_detail(Hotel $hotel){
         // dd($hotel->rooms()->get());
         return view('hotelDetailPage',[
            'hotel'=>$hotel,
            'rooms'=>$hotel->rooms()->get(),
            'roomcount'=>DB::table('order__rooms')->count()
         ]);
       }

       public function bus(){
         return view('bus');
       }

     
}

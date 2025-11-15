<?php

namespace App\Http\Controllers;

use App\Models\Order_Room;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class OrderRoomController extends Controller
{
   
    public function orderRoom(Room $room){
    //    dd( $room->id);
        // dd(request()->all());
        // if(Order_Room::whereRoom_id($room->id)->exists()){
        //     return back()->with('roomExit','');
          
        // }else{
        // dd('true');
        $cleanData=request()->all();

        $date = $cleanData['startDate'];
        $formattedDate1 = Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');  
        $date = $cleanData['endDate'];
        $formattedDate2 = Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');  
        // dd($formattedDate); 
        Order_Room::create([
         'hotel_name'=>$room->hotel->name,
         'room_id'=> $room->id,
         'room_type'=>$room->room_type,
         'room_price'=>$room->price,
         'room_img'=>$room->img_1,
         'user_id'=>auth()->id(),
         'adult'=>$cleanData['adult'],
         'child'=>$cleanData['child'],
         'startDate'=>$formattedDate1,
         'endDate'=>$formattedDate2,
         'issendmail'=>false,
         'pay_img'=>'NO VOUCHER',
         'confirm'=>false,
         'total_price'=>0

     ]);

     return back()->with('orderSuccess','');
        
    
 }
 
        // dd($room);
        // dd($room->id);
        // dd(Order_Room::where('room_id',$room->id)->get());
        //  dd($room->hotel->name);
        
       
        // $rooms=Order_Room::all();
        // foreach($rooms as $room){
            // dd($room->room_id);
        //    $roomdetails=Room::where("id",$room->id)->get();
        //    dd($roomdetails);
            // foreach($roomdetails as $rommdetail){
            //    dd( $rommdetail->id);
            //     if($room->room_id === $rommdetail->id){
            //         // return back()->with('roomerror');
            //         dd('no');
            //     }
            //     else{
                 

           
            
         
        // }
       
      
        

    public function checkOut(){
        
        $orders=Order_Room::where('user_id',auth()->id())->get();
        $total_price=0;
        $total_date=1;  
        $real_price=0;     
        foreach($orders as $order){
            $total_price=0;
            $total_date=1;  
            $startDate = Carbon::parse($order->startDate);
            $endDate = Carbon::parse($order->endDate);
           
            // Calculate the difference between two dates
            $diffInDays = $startDate->diffInDays($endDate);
            $diffInMonths = $startDate->diffInMonths($endDate);
            $diffInYears = $startDate->diffInYears($endDate);

           
            if( $diffInDays < 0 ){
                return view('roomDetail')->with('error','');
            }
            if($diffInDays){
                $total_date+= $diffInDays;
               
            }
            if($diffInMonths){
                $total_date+=$diffInMonths*30;
            }


            if($order->child){
                 $total_price += ($order->child*($order->room_price/2))*$total_date;
            }
            if($order->adult){
                $total_price += ($order->room_price*$order->adult)*$total_date;
            }

            $real_price+=$total_price;
          
        }
        // dd($total_price);
        //   $real_price+=$total_price;
        //   dd($real_price);

        return view('orderRoomForm',[
           
            'orders'=>Order_Room::where('user_id',auth()->id())->get()
        ],compact('real_price','total_date'));
    }

    public function deleteroom($package){
        Order_Room::where('room_id',$package)->delete();
        // $package->delete();
        return redirect('/room_checkOut')->with('delete','');
    }

    public function confirmOrderRoom(){
        $orders=Order_Room::where('user_id',auth()->id())->get();
        $total_price=0;
        $total_date=1;  
        $real_price=0;     
        foreach($orders as $order){
            $total_price=0;
            $total_date=1;  
            $startDate = Carbon::parse($order->startDate);
            $endDate = Carbon::parse($order->endDate);
           
            // Calculate the difference between two dates
            $diffInDays = $startDate->diffInDays($endDate);
            $diffInMonths = $startDate->diffInMonths($endDate);
            $diffInYears = $startDate->diffInYears($endDate);

           
            if( $diffInDays < 0 ){
                return view('roomDetail')->with('error','');
            }
            if($diffInDays){
                $total_date+= $diffInDays;
               
            }
            if($diffInMonths){
                $total_date+=$diffInMonths*30;
            }


            if($order->child){
                 $total_price += ($order->child*($order->room_price/2))*$total_date;
            }
            if($order->adult){
                $total_price += ($order->room_price*$order->adult)*$total_date;
            }

            $real_price+=$total_price;
          
        }

        return view('confirmRoom',[
            'total'=>$real_price,
            // 'room'=>$room
        ]);
    }

    public function confirmRoomsuccess(){
        // dd(request()->all());
        $cleanData= '/storage/'.request('img')->store('/paymentImg');
        DB::table('order__rooms')
         ->where('user_id',auth()->user()->id)
         ->update(['confirm'=>true]);

        DB::table('order__rooms')
        ->where('user_id',auth()->user()->id)
        ->update(['pay_img'=>$cleanData]);

        DB::table('order__rooms')
        ->where('user_id',auth()->user()->id)
        ->update(['total_price'=>request('total_price')]);

        return view('ordersuccess');
    }

    public function checkComfirmRoom($user){
        // dd($user);
        DB::table('order__rooms')
        ->where('user_id',$user)
        ->update(['pay_img'=>'NOVOUCHER']);

        DB::table('order__rooms')
        ->where('user_id',$user)
        ->update(['confirm'=>false]);

        return back()->with('success','');
    }
}

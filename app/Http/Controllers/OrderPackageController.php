<?php

namespace App\Http\Controllers;

use App\Models\Order_Package;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderPackageController extends Controller
{
    public function storeOrder(Package $package){
       
            // if(Order_Package::wherePackage_id($package->id )->exists()){
            //     return back()->with('orderExit','');

            // }
            //  else{
            $cleanData=request()->all();
            // dd($cleanData);
            // dd($package->date);
            Order_Package::create([
                'adult'=>$cleanData['adult'],
                'child'=>$cleanData['child'],
                'user_id'=>auth()->id(),
                'package_title'=>$package->title,
                'package_id'=>$package->id,
                'package_price'=>$package->price,
                'package_img'=> $package->img_1,
                'startDate'=>$package->date,
                'endDate'=>$package->date,
                'issendmail'=>false,
                'pay_img'=>'NO VOUCHER',
                'confirm'=>false,
                'total_price'=>0
    
            ]);
    
            return back()->with('orderSuccess','');
        // }
    }

        public function checkout(){
        //    $packagePrice=Package::where('package_id',)
            $orders=Order_Package::where('user_id',auth()->id())->get();
            $total_price=0;
            
            foreach($orders as $order){
               
                if($order->child){
                     $total_price += $order->child*($order->package_price/2);
                }
                if($order->adult){
                    $total_price += $order->package_price*$order->adult;
                }

               
            }
            return view('orderPackageForm',[
                'orders'=>Order_Package::where('user_id',auth()->id())->get(),
                'count'=>Order_Package::where('user_id', auth()->user()->id)->count()

            ],compact('total_price'));
        }

        public function deletePackage($package){
            // dd($package);
            Order_Package::where('package_id',$package)->delete();
            // $package->delete();
            return redirect('/package_checkout')->with('delete','');
        }

        public function successOrder(){
            return view('ordersuccess');
        }

        public function confirmOrder(){
            $orders=Order_Package::where('user_id',auth()->id())->get();
            $total_price=0;
            
            foreach($orders as $order){
               
                if($order->child){
                     $total_price += $order->child*($order->package_price/2);
                }
                if($order->adult){
                    $total_price += $order->package_price*$order->adult;
                }              
            }

            return view('confirmPackage',[
                'total'=>$total_price,
                // 'package'=>$package
            ]);
        }

        public function confirmsuccess(){
            // dd(request()->all());
            $cleanData= '/storage/'.request('img')->store('/paymentImg');
            DB::table('order__packages')
             ->where('user_id',auth()->user()->id)
             ->update(['confirm'=>true]);

            DB::table('order__packages')
            ->where('user_id',auth()->user()->id)
            ->update(['pay_img'=>$cleanData]);

            
            DB::table('order__packages')
            ->where('user_id',auth()->user()->id)
            ->update(['total_price'=>request('total_price')]);
        
            return view('ordersuccess');

            // DB::table('order__packages')->where('user_id',auth()->user()->id)->update('confirm',true);

        }

        public function checkComfirm($user){
            // dd($user);
            DB::table('order__packages')
            ->where('user_id',$user)
            ->update(['pay_img'=>'NOVOUCHER']);

            DB::table('order__packages')
            ->where('user_id',$user)
            ->update(['confirm'=>false]);

            DB::table('order__packages')
            ->where('user_id',$user)
            ->update(['total_price'=>false]);

            return back()->with('success','');
        }
}

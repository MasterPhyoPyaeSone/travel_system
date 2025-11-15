<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Order_Package;
use App\Models\Order_Room;
use Illuminate\Http\Request;

class AllController extends Controller
{
   
    public function faq(){
        return view('faq');
      }

    public function privacy(){
        return view('privacy');
      }

    public function about(){
        return view('about');
       }

    public function contact(){
        return view('contact');
       }

       public function allcheckout(){
        return view('all_checkout',[
          'orders'=>Order_Package::where('user_id',auth()->id())->get(),
          'roomorders'=>Order_Room::where('user_id',auth()->id())->get()
        ]);
       }

      public function feedback(){
        return view('feedback');
      }


      public function askcontact(){
        // dd(request()->all());
        $cleanData=request()->all();
        // Contact::create($cleanData);
        Contact::create([
          'name'=> $cleanData['name'],
          'email'=> $cleanData['email'],
          'message'=>$cleanData['message'],
          'ph_no'=>$cleanData['ph_no'],
          'issendmail'=>false
        ]);
        

        return back()->with('success','');

      }

     
}

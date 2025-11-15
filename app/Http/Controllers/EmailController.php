<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use App\Mail\SendEmailForPackage;
use App\Mail\SendMailFromAdmin;
use App\Models\Order_Package;
use App\Models\Order_Room;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller implements ShouldQueue
{
    public function send(Order_Room $order)
    {
       
        // dd($user->Package_order);
        if($order->issendmail === 0){
            $data = [
                'title' => 'Test Email',
                'content' => 'This is a test email sent from Laravel using Mailtrap.'
            ];
            
            $recipient = $order->user->email;
            
            Mail::to($recipient)->queue(new SendEmail($order));

            $query = DB::table('order__rooms')
            ->where('room_id', $order->room_id)
            ->update(['issendmail' => true]);
            return back()->with('success','');
        }else{
            return back()->with('errormail','');
          
        }
          
    }

    public function sendmail(Order_Package $order){

        if($order->issendmail === 0){
            // dd($order->room_id);
            $data = [
                'title' => 'Test Email',
                'content' => 'This is a test email sent from Laravel using Mailtrap.'
            ];
            
            $recipient = $order->user->email;
            Mail::to($recipient)->queue(new SendEmailForPackage($order));

            $query = DB::table('order__packages')
            ->where('package_id', $order->package_id)
            ->update(['issendmail' => true]);
            return back()->with('success','');
        }else{
            return back()->with('errormail','');
          
        }
    }

    public function sendmailformAd($email){
        // dd(request()->all());
    
        $data=request('sendmailfromadmin');
    
        Mail::to($email)->queue(new SendMailFromAdmin($data));
        DB::table('contacts')
        ->where('email',$email)
        ->update(['issendmail'=>true]);
        return redirect('/admin/contactMail')->with('success','');

    }
}

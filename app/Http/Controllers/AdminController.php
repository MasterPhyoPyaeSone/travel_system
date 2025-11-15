<?php

namespace App\Http\Controllers;

use App\Http\Requests\packageFormRequest;
use App\Http\Requests\PackageFormStoreRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\contact;
use App\Models\Hotel;
use App\Models\Order_Package;
use App\Models\Order_Room;
use App\Models\Package;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function user(){
        // dd(auth()->user()->admin);
        return view('admin/user',[
            'users'=> User::
             latest()->get()
            //  paginate(5)
            // ->withQueryString()
        ]);
       }


    public function useredit(User $user_id){
       return view('admin/userEdit',[
        'user'=>$user_id
       ]);
    }

    public function update(User $user, Request $request){
       
        request()->validate([
            'name'=>['required','max:20'],
            'email'=>['required'],
            'username'=>['required','max:20']
        ]);
        // dd('cool');
        $user->update($request->all());
        return redirect('/admin')->with('success','');


    }

    public function delete(User $user){
        $user->delete();
        return redirect('/admin')->with('success','');
    }


    // *****************  users end *************************


    // *****************  packages ****************************

    public function indexOfPackage(){
        return view('admin.indexOfPackage',[
            'packages'=>Package::with('category')
                        ->latest()
                        ->get()
            
        ]);
    }

    // Package Create
    public function createPackage(){
        return view('admin.createPackage',[
            'categories'=>Category::all()
        ]);
    }

    // package store
    public function storePackage(Package $package, Request $request){
        //  dd($request->title);
        // dd(request()->all());
        $cleanData=request()->all();
        $cleanData['img_1']= '/storage/'.request('img_1')->store('/newpackages');
        $cleanData['img_2']= '/storage/'.request('img_2')->store('/newpackages');
        $cleanData['img_3']= '/storage/'.request('img_3')->store('/newpackages');
        $cleanData['img_4']= '/storage/'.request('img_4')->store('/newpackages');
        $cleanData['img_5']= '/storage/'.request('img_5')->store('/newpackages');

        Package::create([
            "title" => $request->title,
            "intro" =>$request->intro,
            "body" => $request->body,
            "category_id" => $request->category_id,
            "price" => $request->price,
            "long_time" => $request->long_time,
            "place" =>$request->place,
            "date" =>$request->date,
            "img_1" =>$cleanData['img_1'],
            "img_2" =>$cleanData['img_2'],
            "img_3" => $cleanData['img_3'],
            "img_4" =>$cleanData['img_4'],
            "img_5" => $cleanData['img_5']

        ]);   
        return redirect('/admin/allpackage')->with('success','');
    }

    // Package Edit && Update
    public function packageEdit(Package $package){
        return view('admin.editPackage',[
            'package'=>$package,
            'categories'=>Category::all()
        ]);
    }

    // package update
    public function updatePackage(Package $package){
        // dd($package->update($request->all()));
        // dd(request()->all());
        // dd(request('img_1'));
        $cleanData=request()->all();     
        if ($file=request('img_1')){
            if($path=public_path($package->img_1)){
                File::delete($path);         
            }
        $cleanData['img_1']= '/storage/'.$file->store('/packages');
        }
        if ($file=request('img_2')){
            if($path=public_path($package->img_2)){
                File::delete($path);         
            }
        $cleanData['img_2']= '/storage/'.$file->store('/packages');
        }
        if ($file=request('img_3')){
            if($path=public_path($package->img_3)){
                File::delete($path);         
            }
        $cleanData['img_3']= '/storage/'.$file->store('/packages');
        }
        if ($file=request('img_4')){
            if($path=public_path($package->img_4)){
                File::delete($path);         
            }
        $cleanData['img_4']= '/storage/'.$file->store('/packages');
        }
        if ($file=request('img_5')){
            if($path=public_path($package->img_5)){
                File::delete($path);         
            }
        $cleanData['img_5']= '/storage/'.$file->store('/packages');
        }
       
        // dd($cleanData);
        $package->update($cleanData);

        return redirect('/admin/allpackage')->with('success','');
      
  }


    //  package delete
  public function deletePackage(Package $package){
           $package->delete();
           return back()->with('success','');
  }

//   *****************  package end  *************************

//   *****************  hotels  *************************

public function indexOfHotel(){
    return view('admin.indexOfHotel',[
        'hotels'=>Hotel::with('package')->latest()->get()
    ]);
}

public function hotelEdit(Hotel $hotel){
    return view('admin.editHotel',[
        'hotel'=>$hotel,
        'packages'=>Package::all()
    ]);
}

public function updateHotel(Hotel $hotel){
    // dd(request()->all());

    $cleanData=request()->all();     
    if ($file=request('img_1')){
        if($path=public_path($hotel->img_1)){
            File::delete($path);         
        }
    $cleanData['img_1']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_2')){
        if($path=public_path($hotel->img_2)){
            File::delete($path);         
        }
    $cleanData['img_2']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_3')){
        if($path=public_path($hotel->img_3)){
            File::delete($path);         
        }
    $cleanData['img_3']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_4')){
        if($path=public_path($hotel->img_4)){
            File::delete($path);         
        }
    $cleanData['img_4']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_5')){
        if($path=public_path($hotel->img_5)){
            File::delete($path);         
        }
    $cleanData['img_5']= '/storage/'.$file->store('/hotels');
    }

        
    if ($file=request('img_6')){
        if($path=public_path($hotel->img_6)){
            File::delete($path);         
        }
    $cleanData['img_6']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_7')){
        if($path=public_path($hotel->img_7)){
            File::delete($path);         
        }
    $cleanData['img_7']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_8')){
        if($path=public_path($hotel->img_8)){
            File::delete($path);         
        }
    $cleanData['img_8']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_9')){
        if($path=public_path($hotel->img_9)){
            File::delete($path);         
        }
    $cleanData['img_9']= '/storage/'.$file->store('/hotels');
    }
    if ($file=request('img_10')){
        if($path=public_path($hotel->img_10)){
            File::delete($path);         
        }
    $cleanData['img_10']= '/storage/'.$file->store('/hotels');
    }

//    dd('hh');
    $hotel->update($cleanData);

    return redirect('/admin/allhotel')->with('success','');
}

public function createHotel(){
   return view('admin.createHotel',[
    'packages'=>Package::all(),
   ]);
}

public function storeHotel(Request $request){
    // dd(request()->all());
    $cleanData=request()->all();
    $cleanData['img_1']= '/storage/'.request('img_1')->store('/newhotel');
    $cleanData['img_2']= '/storage/'.request('img_2')->store('/newhotel');
    $cleanData['img_3']= '/storage/'.request('img_3')->store('/newhotel');
    $cleanData['img_4']= '/storage/'.request('img_4')->store('/newhotel');
    $cleanData['img_5']= '/storage/'.request('img_5')->store('/newhotel');
    $cleanData['img_6']= '/storage/'.request('img_6')->store('/newhotel');
    $cleanData['img_7']= '/storage/'.request('img_7')->store('/newhotel');
    $cleanData['img_8']= '/storage/'.request('img_8')->store('/newhotel');
    $cleanData['img_9']= '/storage/'.request('img_9')->store('/newhotel');
    $cleanData['img_10']= '/storage/'.request('img_10')->store('/newhotel');

    Hotel::create([
        "name" => $request->name,
        "intro" =>$request->intro,
        "body" => $request->body,
        "package_id" => $request->package_id,
        "price" => $request->price,
        "place" =>$request->place,
        "img_1" =>$cleanData['img_1'],
        "img_2" =>$cleanData['img_2'],
        "img_3" => $cleanData['img_3'],
        "img_4" =>$cleanData['img_4'],
        "img_5" => $cleanData['img_5'],
        "img_6" =>$cleanData['img_6'],
        "img_7" =>$cleanData['img_7'],
        "img_8" => $cleanData['img_8'],
        "img_9" =>$cleanData['img_9'],
        "img_10" => $cleanData['img_10']

    ]);   

    // dd('gg');
    return redirect('/admin/allhotel')->with('success','');
}
public function deleteHotel(Hotel $hotel){
    $hotel->delete();
    return back()->with('success','');

}

// Room

public function createRoom_1(){
    return view('admin.createRoom',[
        'hotels'=>Hotel::all()
    ]);
}

public function storeRoom_1(Request $request){
    // dd(request()->all());
    $cleanData=request()->all();
    $cleanData['img_1']= '/storage/'.request('img_1')->store('/newroom');
    $cleanData['img_2']= '/storage/'.request('img_2')->store('/newroom');
    $cleanData['img_3']= '/storage/'.request('img_3')->store('/newroom');
    $cleanData['img_4']= '/storage/'.request('img_4')->store('/newroom');
    $cleanData['img_5']= '/storage/'.request('img_5')->store('/newroom');

    Room::create([
        "room_type" => $request->room_type,
        "intro" =>$request->intro,
        "body" => $request->body,
        "hotel_id" => $request->hotel_id,
        "price" => $request->price,
        "img_1" =>$cleanData['img_1'],
        "img_2" =>$cleanData['img_2'],
        "img_3" => $cleanData['img_3'],
        "img_4" =>$cleanData['img_4'],
        "img_5" => $cleanData['img_5']

    ]);   


    return redirect('/admin/allroom')->with('success','');
}

public function indexOfRoom(){
    return view ('admin.indexOfRoom',[
        'rooms'=> Room::latest()->get()   
    ]);
}

public function deleteRoom(Room $room){
    // dd($room);
    $room->delete();
    return back()->with('success','');
}

// public function updateRoom(Room $room){
//     dd('up');
// }

public function roomEdit(Room $room){

    // dd($room);
    return view('admin.editRoom',[
        'room'=>$room,
        'hotels'=>Hotel::all()
    ]);
}

public function updateRoom(Room $room){
    // dd(request()->all());

    $cleanData=request()->all();     
    if ($file=request('img_1')){
        if($path=public_path($room->img_1)){
            File::delete($path);         
        }
    $cleanData['img_1']= '/storage/'.$file->store('/rooms');
    }
    if ($file=request('img_2')){
        if($path=public_path($room->img_2)){
            File::delete($path);         
        }
    $cleanData['img_2']= '/storage/'.$file->store('/rooms');
    }
    if ($file=request('img_3')){
        if($path=public_path($room->img_3)){
            File::delete($path);         
        }
    $cleanData['img_3']= '/storage/'.$file->store('/rooms');
    }
    if ($file=request('img_4')){
        if($path=public_path($room->img_4)){
            File::delete($path);         
        }
    $cleanData['img_4']= '/storage/'.$file->store('/rooms');
    }
    if ($file=request('img_5')){
        if($path=public_path($room->img_5)){
            File::delete($path);         
        }
    $cleanData['img_5']= '/storage/'.$file->store('/rooms');
    }

    $room->update($cleanData);

    return redirect('/admin/allroom')->with('success','');

}

// ***************  room end  ************************


// ****************  orders  ***********************
public function AllPackageorders(Order_Package $order_package){
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

    return view('admin.indexOfAllOrder',[
        'orders'=>Order_Package::all(),
        'price'=>$real_price
    ]);
    // $order_package = $order_package->all();
    // dd($order_package);
    // foreach ($order_package as $package) {
    //    dd( $package->user->name);
    // }
    // dd(auth()->user()->Package_order()->get());
    // dd(User::whereId('6')->get());
    // dd(Order_Package::whereUser_id('6')->get());
}

public function searchUser(Request $request){
    if($user=User::whereName($request->name)->first()){
        // dd('jj');
         return view('admin.indexOfAllOrder',[
        'orders'=>Order_Package::whereUser_id($user->id)->get(),
    ]);
    }
    else{
        // dd('no');
        return redirect('/admin/allorders')->with('error','Please check username!!!!!');
    }

   
   
}
public function deletePackageOrder(Order_Package $order_package){
        // dd($order_package);
        $order_package->delete();
        return back()->with('success','');
}

public function allRoomorders(){
    // dd('kk');
    return view('admin.indexOfRoomOrder',[
        'orders'=>Order_Room::all()
    ]);
}

public function searchUserRoom(Request $request){
// dd($request->name);
    if($user=User::whereName($request->name)->first()){
        // dd('jj');
         return view('admin.indexOfRoomOrder',[
        'orders'=>Order_Room::whereUser_id($user->id)->get(),
    ]);
    }
    else{
        // dd('no');
        return redirect('/admin/allRoomorders')->with('error','Please check username!!!!!');
    }


}

public function deleteorderroom(Order_Room $order){
    // dd($order);
    $order->delete();
    return back()->with('success','');
}

public function contactMail(){
    return view('admin.contactMail',[
        'mails'=>contact::latest()->get()
    ]);
}

public function sendMailEdit($email){
    // dd();

    return view('admin.contactMialEdit',[
        'mail'=>contact::whereEmail($email)->get(),
        // 'email'=>$email
    ]);

}

public function deletecontact(contact $id){
//   dd($id);
    $id->delete();

    return back()->with('success','');
}


// Blogs
public function AllBlogs(){
   return view('admin.allblogs',[
        'blogs'=>Blog::all()
   ]);
}

public function deleteBlog(Blog $blog){
    $blog->delete();
    return back()->with('success','');
}
}
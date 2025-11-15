<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function profileDetail(){
        // dd(auth()->user()->favoriate_packages()->get());
        return  view('UserProfile',[
            'favs'=>auth()->user()->favoriate_packages()->get(),
            'blogs'=>auth()->user()->blogs()->get(),
        ]);
    }

    public function profile_upload(User $user){

        if ($file=request('image')){
           if($path=public_path($user->image)){
               File::delete($path);         
           }
         $user->image= '/storage/'.$file->store('/blogs');
       
       }
       $user->update();
       return back()->with('success','Successfully Change Profile');
        }

        public function userData_upload(Request $request,User $user){
            // dd(request()->all());
            $cleanData=$request->validate([
                'email' => ['required'],
                'oldPassword' => ['required'],
                'newPassword' => ['required','min:6'],
                'confirmPassword' => ['required','same:newPassword']
          ]); 
              
        if(Hash::check($cleanData['oldPassword'], $user->password)){
           User::whereId(auth()->id())->update([
            'password'=>Hash::make($cleanData['newPassword'])
           ]);
    
           return back()->with('changePassword','Change Password successful');
        }else{
            return back()->withErrors(['oldPassword'=>'Email is wrong'
            ])->withInput();
        }
         }


   
}

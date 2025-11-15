<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Log_Reg_Controller extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerStore(){
    // dd(request()->all());
        if(request()->confirm_password == request()->password){
            $CleanData=request()->validate([
                'name'=>['required','max:20'],
                'username'=>['required','max:20',Rule::unique('users','username')],
                'email'=>['required','max:30',Rule::unique('users','email')],
                'password'=>['required','max:15'],  
                     
            ]);

        // dd('hh');
            $user=User::create($CleanData);    
            // auth()->login($user);
            return redirect('/register')->with('successful','Successfully  Register');
        }else{
            // dd('hh');
            // return back()->withErrors(['confirm_password'=>'Please Register Again'])->withInput();
            return back()->with('confirm_password','Please Register Again');
           // return redirect('/register')->with('confirm_password','Please Register Again');
        }
         
       }

       public function login(){
        if(!auth()->check()){
            return view('login');
        }else{
            return redirect('/')->with('info','You are already logged in!');
        }            
    
}

public function loginStore(Request $request){

    $credentials = [
        'email' => $request['email'],
        'password' => $request['password'],
    ];
    if(Auth::attempt($credentials)) {
        $checkadmin=User::whereEmail($request['email'])->get();
        foreach($checkadmin as $admin){
            //  dd($admin->admin);
             if($admin->admin){
            return redirect('/admin');
        }
        }
       
        
        return redirect('/')->with('success','Login successful'.auth()->user()->name);       
       
    }
    else{
        return back()->withErrors(['email'=>'Please check something wrong'])->withInput();
    }
}

public function singOut(){
    // dd('hhh');
    auth()->logout();
    return redirect('/');
}
}

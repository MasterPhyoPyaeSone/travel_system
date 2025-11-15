<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('blog',[
            'blogs'=>Blog::latest()->get()
        ]);
      }

      public function store(){
    
        $cleanData = request()->validate([
            'title'=> ['required'],
            'image_1'=>['required'],
            'image_2'=>['required'],
            'memories_1'=>['required'],
            'memories_2'=>['required'],

        ]);
       
        $cleanData['image_1']= '/storage/'.request()->image_1->store('/blogs');
        $cleanData['image_2']= '/storage/'.request()->image_2->store('/blogs');
        $cleanData['user_id']=auth()->id();
        // dd($cleanData);
        Blog::create([
            'title'=>request()->title,
            'img_1'=> $cleanData['image_1'],
            'img_2'=> $cleanData['image_2'],
            'user_id'=> auth()->id(),
            'body_1'=>request()->memories_1,
            'body_2'=>request()->memories_2,

        ]);

       return back()->with('success','Successful');
      }

     
}

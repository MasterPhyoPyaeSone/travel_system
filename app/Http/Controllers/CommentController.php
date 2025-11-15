<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Hotel;
use App\Models\HotelComment;
use App\Models\Order_Package;
use App\Models\Package;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Package $package){
        // dd(request()->all());
     request()->validate([
        "comment"=>['required','max:100']
     ]);
     Comment::create([
        'body'=>request('comment'),
        'user_id'=>auth()->id(),
        'package_id'=>$package->id
     ]);
     return back()->with('success','');
    }

    public function delete($package){
       
       
        // request()->validate([
        //     'comment'=>['required','max:100']
        // ]);
        // dd($package->id);
        Comment::where('id',$package)->delete();
        return back()->with('delete','');
    }

    public function edit(Comment $comment){
        // dd($comment);
        return view('editComment',[
            'comment'=>$comment,
            'count'=>Order_Package::where('user_id', auth()->user()->id)->count()

        ]);
    }
    public function update(Comment $comment){
        request()->validate([
            'comment'=>['required','max:100']
        ]);

        $comment->update([
            'body'=>request('comment'),
            'count'=>Order_Package::where('user_id', auth()->user()->id)->count()
        ]);

        $comment->save();
        return redirect('/packages/'.$comment->package->id)->with('edit','');
    }

    public function hote_comment_store(Hotel $hotel){

        request()->validate([
            "comment"=>['required','max:100']
         ]);
         HotelComment::create([
            'body'=>request('comment'),
            'user_id'=>auth()->id(),
            'hotel_id'=>$hotel->id
         ]);
         return back()->with('success','');
    }
}

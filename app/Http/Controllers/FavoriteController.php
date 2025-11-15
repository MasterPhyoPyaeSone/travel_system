<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function handle_favorite(Package $package){
        $user=User::find(auth()->user()->id);
       
        if($user->isFavorite($package)){
            $user->favoriate_packages()->detach($package->id);
        }
        else{
            $user->favoriate_packages()->attach($package->id);
        }
        return back()->with('favorite','');
    }
}

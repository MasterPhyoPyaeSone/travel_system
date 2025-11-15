<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room_detail(Room $room){
        return view("roomDetail",[
            "room"=> $room
        ]);       
    }
}

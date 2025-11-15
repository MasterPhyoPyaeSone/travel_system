<?php

namespace App\Http\Controllers;

use App\Models\Order_Room;
use App\Models\Room;
use Illuminate\Http\Request;

class OrderFormController extends Controller
{
    public function show(Room $room){
        return view("orderForm",[
            "room"=> $room
        ]);
    }
    

}

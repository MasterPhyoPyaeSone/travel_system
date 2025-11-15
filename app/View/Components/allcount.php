<?php

namespace App\View\Components;

use App\Models\Order_Package;
use App\Models\Order_Room;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class allcount extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $order=0;
        $order_1=Order_Package::where('user_id',auth()->id())->count();
        $order_2=Order_Room::where('user_id',auth()->id())->count();
        $order=$order_1+$order_2;
        return view('components.allcount',[
            'order'=>$order
        ]);
    }
}

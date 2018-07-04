<?php

namespace App\Http\Controllers;

use App\OldOrder;
use Illuminate\Http\Request;
use App\Traits\TOrderHelper;
use App\Order;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;
use Phpml\Regression\SVR;


class OrderController extends Controller
{
    use TOrderHelper;
    public function search(){
        return view('content/content');
    }
    public function searchOrder($order){
        $order_id = $this->extractNumber($order);

        $order = Order::find($order_id);


        $couriers =  OldOrder::select('courier_id','eta_accomplished')->get()->toArray();
        foreach($couriers as $courier){
            $samples[] = [$courier['courier_id']];
            $targets[] = $courier['eta_accomplished'];


        }

        $regression = new SVR(Kernel::LINEAR);
        $regression->train($samples, $targets);
        predictProbability
        return $order;


    }
}

<?php

namespace App\Http\Controllers;

use App\Models\baseDB;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->base = new baseDB;
    }


    public function pay(Request $request)
    {
        $list = session()->get("listProductId");
        $user = session()->get("loginId");
        $getCurrent = date("Y-m-d");
        $data = [
            "user_id" => $user,
            "note" => $request->note,
            "total" => $request->total,
            "order_date" => date('Y-m-d', strtotime($getCurrent . ' +3 day')),
        ];
        $this->base->addData("orders", $data);
        $order = Order::orderBy('id', 'DESC')->first();

        // dd($list);
        // add insert data to orderDetail
        foreach ($list as $productID) {
            $product = Product::where("id", $productID)->first();
            $data = [
                "product_id" => $product->id,
                "order_id" => $order->id,
                "amount" => 1,
                "price" => $product->price - ($product->price / 100) * $product->discount
            ];
            $this->base->addData("order_details", $data);
        }
        session()->pull("listProductId");
        return redirect()->route("order.success");
    }

    public function success() {
        return view("ui.success");
    }
}

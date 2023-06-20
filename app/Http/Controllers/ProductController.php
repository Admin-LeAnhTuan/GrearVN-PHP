<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function productDetails(Request $request)
    {
        $product = Product::where("title", $request->title)->first();
        return view("ui.detail", ["product" => $product]);
    }

    public function productOrder(Request $request)
    {
        $product = Product::where("title", $request->title)->first();
        if (session()->has("listProductId")) {
            $list = session()->get("listProductId");
            if (in_array($product->id, $list)) {
            } else {
                array_push($list, $product->id);
            }
            session()->pull("listProductId");
            session()->put("listProductId", $list);
        } else {
            session()->put("listProductId", [$product->id]);
        }
        return redirect()->route("cart.index");
    }
}

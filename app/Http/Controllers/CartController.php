<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $listProduct = collect([]);
        if (Session()->has("listProductId")) {
            foreach (Session()->get("listProductId") as $key) {
                $product = Product::where("id", $key)->first();
                $listProduct->push($product);
            }
        }

        $user = User::where("id", Session()->get("loginId") )->first();
        return view("ui.cart", [
            "user" => $user,
            "total" => 0,
            "listProducts" => $listProduct
        ]);
    }

    public function deleteId(Request $request)
    {
        if (Session()->has("listProductId")) {
            $list = Session()->get("listProductId");
            // dd(Session()->get("listProductId"));

            $list = array_diff($list, [$request->id]);

            if (count($list) == 0) {
                Session()->pull("listProductId");
            } else {
                Session()->pull("listProductId");
                Session()->put("listProductId", $list);
            }


            return back()->with("success", "Đã xóa sản phẩm thành công");
        }
    }
}

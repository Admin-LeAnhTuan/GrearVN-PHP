<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function category(Request $request)
    {
        return view("ui.search", [
            "category" => $request->category
        ]);
    }

    public function keyword(Request $request)
    {
        if ($request->keyword == null) {
            return redirect()->route("home")->with('errors', 'Xin mời nhập từ khóa');
        }
        $products = Product::where('title', 'like', '%' . $request->keyword . '%')->get();

        if ($products->count() == 0) {
            return redirect()->route("home")->with('errors', 'Không tồn tại sản phẩm này mời nhập lại
            ');
        }
        return view("ui.search-keyword", [
            "products" => $products,
            "title" => 'Những sản phẩm ' . $request->keyword . ' tìm thấy'
        ]);
    }
}

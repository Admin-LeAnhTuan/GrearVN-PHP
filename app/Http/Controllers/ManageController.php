<?php

namespace App\Http\Controllers;

use App\Models\baseDB;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function __construct()
    {
        $this->baseDB = new baseDB;
    }
    public function product()
    {
        $products = Product::whereNull("deleted_at")->paginate(10);
        $categories = Category::all();
        return view("ui.manage-product", [
            "products" => $products,
            "categories" => $categories
        ]);
    }

    public function addProduct(Request $request)
    {

        $rules = [
            "title" => "required|unique:products", "category_id" => "required", "price" => "required",
            "thumbnail" => "required"
        ];

        $data = [
            "title" => $request->title,
            "category_id" => $request->category_id,
            "price" => $request->price,
            "thumbnail" => $request->thumbnail,
            "description" => $request->description
        ];

        $request->validate($rules);

        $this->baseDB->addData("products", $data);
        return back()->with("success", "Cập nhập thành công");
    }

    public function updatedProduct(Request $request)
    {
        $rules = [
            "title" => "required",
            "category_id" => "required",
            "price" => "required",
            "thumbnail" => "required",
            "discount" => "",
            "description" => ""
        ];

        $data = [
            "title" => $request->title,
            "category_id" => $request->category_id,
            "price" => $request->price,
            "thumbnail" => $request->thumbnail,
            "discount" => $request->discount,
            "description" => $request->description,
        ];


        $request->validate($rules);

        $this->baseDB->updateData("products", $data, $request->id);
        return back()->with("success", "Sửa thành công");
    }

    public function deleteProduct(Request $request)
    {
        $data = [
            "deleted_at" => date("Y-m-d"),
        ];
        $this->baseDB->updateData("products", $data, $request->id);
        return back()->with("success", "Xóa thành công");
    }

    public function category()
    {
        $categories = Category::paginate(10);

        return view("ui.manage-category", [
            "categories" => $categories
        ]);
    }

    public function addCategory(Request $request)
    {
        $rules = ["name" => "required"];

        $data = ["name" => $request->name];

        $request->validate($rules);

        $this->baseDB->addData("categories", $data);
        return back()->with("success", "Cập nhập thành công");
    }

    public function deletedCategory(Request $request)
    {
        // $isDelete = $this->baseDB->deleteOne("categories", $request->id);
        // if ($isDelete) {
        //     return back()->with("success", "Cập nhập thành công");
        // }
        return back()->with("errors", "Không thể xóa thể loại");
    }

    public function updatedCategory(Request $request)
    {
        $rules = [
            "name" => "required"
        ];

        $data = [
            "name" => $request->name
        ];

        $request->validate($rules);

        $this->baseDB->updateData("categories", $data, $request->id);

        $categories = Category::paginate(10);
        return back()->with("success", "Xóa thành công");
    }

    public function order()
    {
        $orders = Order::paginate(10);
        $total = 0;
        return view("ui.manage-order", ["orders" => $orders, "total" => $total]);
    }

    public function orderDetail(Request $request)
    {
        $orderDetails = OrderDetail::where("order_id", $request->id)->get();

        return view("ui.manage-order-detail", [
            "orderDetails" => $orderDetails
        ]);
    }
}

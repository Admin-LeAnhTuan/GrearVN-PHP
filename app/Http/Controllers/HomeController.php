<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;
class HomeController extends Controller
{
   public function index()
   {
      $categories = Category::limit(5)->get();
      return view("home", [
         "categories" => $categories
      ]);
   }

   public function getAdd()
   {
      return view("components.add", [
         "title" => "Them san pham"
      ]);
   }

   public function postAdd(Request $request)
   {
      $rules = [
         'product_name' => ['required','min:6', new Uppercase],
         'product_price' => 'required|integer'
      ];

      $messages = [
         'required' => 'Bắt buộc nhập :attribute',
         'product_name.min' => ':attribute phải có :min kí tự',
         'integer' => ':attribute phải là số',
      ];

      $attributes = [
         "product_name" => "Tên sản phẩm",
         "product_price" => "Giá sản phẩm"
      ];
      $validator = Validator::make($request->all(), $rules, $messages, $attributes);
      // dd($validator);
      if($validator->fails()) {
         $validator->errors()->add("msg", "Nhập sai rồi nha pé ơi");
         return back()->withErrors($validator);
      } else {
         return redirect()->route("home")->with('msg', "thanh công rồi nha");
      }
      
      // $validator->validate();
   }

   public function putAdd(Request $request)
   {
      dd($request);
   }
}

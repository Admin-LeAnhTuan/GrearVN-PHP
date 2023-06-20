<?php

namespace App\Http\Controllers;

use Admins;
use App\Models\Admin;
use App\Models\baseDB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function __construct()
    {
        $this->base = new baseDB;
    }

    public function login()
    {
        return view("auth.login");
    }

    public function registration(Request $request)
    {
        return view("auth.register");
    }

    public function registerUser(Request $request)
    {
        $rules = [
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "numberphone" => 'required|numeric|digits:10',
            "address" => 'required',
            "password" => 'required|min:6|max:50',
            "retype-password" => "required_with:password|same:password|min:6"
        ];
        $request->validate($rules);

        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->numberphone = $request->numberphone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return redirect("login")->with("success", "Đăng kí thành công!");
        } else {
            return back()->with("error", "Vui lòng kiểm tra lại!");
        }
    }

    public function loginUser(Request $request)
    {
        $rules = [
            "email" => 'required|email',
            "password" => 'required|min:6|max:50',
        ];
        $request->validate($rules);
        $user = User::where('email', '=', $request->email)->first();
        $isAdmin = false;

        if ($user == null) {
            $user = Admin::where("email", $request->email)->first();
            $isAdmin = true;
        }

        if ($user && $user->deleted_at == null) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put("loginId", $user->id);
                if ($isAdmin) {
                    $request->session()->put("admin", true);
                }
                return redirect("/")->with('success', "Đăng nhập thành công");
            } else {
                return back()->with('fail', 'Mật khẩu không đúng');
            }
        } else {
            return back()->with('fail', 'Email này chưa đăng kí');
        }
    }

    public function dashboard()
    {
        return "dashboard";
    }


    public function userProfile()
    {

        if (session()->has("loginId")) {
            if (session()->has("admin")) {
                $user = Admin::where("id", "=", session()->get("loginId"))->first();
            } else {
                $user = User::where("id", "=", session()->get("loginId"))->first();
            }
            return view("auth.user", [
                "user" => $user,
            ]);
        }

        return view("auth.user");
    }

    public function managerManage()
    {
        if (session()->has("loginId")) {
            $users = User::all();
            return view("auth.manage", [
                "users" => $users
            ]);
        }
        return view("auth.manage");
    }

    public function logout()
    {
        if (session()->has("listProductId")) {
            session()->pull("listProductId");
        }

        if (session()->has("loginId")) {
            session()->pull("loginId");
            if (session()->has("admin")) {
                session()->pull("admin");
            }
            return redirect("login");
        } else {
            return redirect("/");
        }
    }

    public function change(Request $request)
    {
        $rules = [
            "name" => "required",
            "address" => "required",
            "numberphone" => "required|numeric|digits:10",
        ];
        // dd($request->address);
        $data = [
            "name" => $request->name,
            "numberphone" => $request->numberphone,
            "address" => $request->address,
        ];

        // dd($data);
        $request->validate($rules);
        $this->base->updateData("users", $data, Session()->get("loginId"));
        return back()->with("success", "Thay đổi dữ liệu thành công");
    }

    public function delete(Request $request)
    {
        $data = [
            "deleted_at" => date("Y-m-d"),
        ];
        $this->base->updateData("users", $data, $request->id);
        return back()->with("success", "Xóa người dùng thành công");
    }
}

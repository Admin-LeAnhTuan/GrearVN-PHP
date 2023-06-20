<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\baseDB;

class UsersController extends Controller
{
    private $tableName;
    public function __construct()
    {
        $this->tableName = "users";
        $this->base = new baseDB;
    }
    public function index()
    {
        $listUser = $this->base->getAllData($this->tableName);

        $data = $this->base->learnQueryBuilder();
        dd($data);
        return view('users.list', [
            'title' => 'Danh sách người dùng',
            "users" => $listUser,
        ]);
    }

    public function add()
    {
        $title = "Thêm người dùng";
        return view("users.add", [
            "title" => $title,
        ]);
    }

    public function postAdd(Request $request)
    {
        $rules = [
            'fullname' => "required|min:5",
            'email' => "required|email:rfc|unique:users",
        ];
        $messages =  [
            "fullname.required" => "Họ và tên bắt buộc phải nhập",
            "fullname.min" => "Họ và tên phải từ :min ký tự",
            "email.required" => "Email bắt buộc phải nhập",
            "email.email" => "Email không đúng định dạng",
            "email.unique" => "Email đã tôn tại"
        ];
        $request->validate($rules, $messages);
        $dataInsert = [
            "fullname" => $request->fullname,   
            "email" => $request->email,
            "create_at" => date("Y-m-d H:i:s")
        ];

        $this->base->addData($this->tableName, $dataInsert);
        return redirect()->route("user.index")->with('msg', "Thêm người dùng thành công");
    }

    public function edit(Request $request, $id)
    {
        if (!empty($id)) {
            $userDetail = $this->base->getDataDetail($this->tableName, $id);

            if (!empty($userDetail[0])) {
                $request->session()->put('id', $id);

                $userDetail = $userDetail[0];
            } else {
                return redirect()->route('user.index')->with('msg', "Người dùng không tồn tại");
            }
        } else {
            return redirect()->route('user.index')->with('msg', "Người dùng không tồn tại");
        }
        return view('users.edit', [
            "title" => "Cập nhập người dùng",
            "user" => $userDetail
        ]);
    }

    public function postEdit(Request $request)
    {
        $id = session('id');
        if (empty($id)) {
            return back()->with('msg', "Cập nhập thất bại");
        }
        $rules = [
            'fullname' => "required|min:5",
            'email' => "required|email:rfc|unique:users,email," . $id,
        ];
        $messages =  [
            "fullname.required" => "Họ và tên bắt buộc phải nhập",
            "fullname.min" => "Họ và tên phải từ :min ký tự",
            "email.required" => "Email bắt buộc phải nhập",
            "email.email" => "Email không đúng định dạng",
            "email.unique" => "Email đã tôn tại"
        ];
        $request->validate($rules, $messages);
        $dataInsert = [
            "fullname" => $request->fullname,
            "email" => $request->email,
            "create_at" => date("Y-m-d H:i:s"),
        ];
        $this->base->updateData($this->tableName, $dataInsert, $id);

        return redirect()->route("user.edit", ["id" => $id])->with("msg", "Cập nhập người dung thành công");
    }

    public function delete($id)
    {
        if (empty($id)) {
            return back()->with('msg', "Cập nhập thất bại");
        } else {
            $this->base->deleteOne($this->tableName, $id);

            return redirect()->route('user.index')->with("msg", "Xóa người dùng thành công");
        }
        return redirect()->route('user.index')->with("msg", "không thể xóa người dùng");
    }
}

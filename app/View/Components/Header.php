<?php

namespace App\View\Components;

use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use Illuminate\View\Component;
use Session;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();
        $user = null;
        if (session()->has("loginId")) {
            if (session()->has("admin")) {
                $user = Admin::where("id", "=", session()->get("loginId"))->first();
            } else {
                $user = User::where("id", "=", session()->get("loginId"))->first();
            }
        }
        return view('components.header', [
            "categories" => $categories,
            "user" => $user
        ]);
    }
}

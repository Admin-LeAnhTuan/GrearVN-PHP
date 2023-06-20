<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        return "Chuyen muc";
    }

    public function getCategories($id = null) {
        return "get categories: " .$id;
    }
    
    public function postCategories() {

    }

    public function addCategories(Request $request) {
       
        return view('add');
    }

    public function handlePostCategories() {
        return "handle Post Categories";
    }

    public function handleDeleteCategories() {
        return "handle Delete categories";
    }

    public function handleUpdateCategories(){
        return "handle update categories";
    }

    public function handleAddCategories($id = null, Request $request){
        $cateName = $request->category_name;
        dd($cateName);
        return "handle add categories";
    }
}

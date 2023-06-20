<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, "index"])->name('home');

#region login
Route::prefix("login")->name("login.")->group(function () {
    Route::get("/", [CustomAuthController::class, "login"])->name("index")->middleware('alreadyLoggedIn');
    Route::get("/register", [CustomAuthController::class, "registration"])->name("registration")->middleware('alreadyLoggedIn');
    Route::post("/register", [CustomAuthController::class, "registerUser"])->name("register-user");
    Route::post("/user", [CustomAuthController::class, "loginUser"])->name("user");
    Route::get("/dashboard", [CustomAuthController::class, "dashboard"])->name("dashboard");
});
#endregion login

#region auth
Route::prefix("auth")->name("auth.")->group(function () {
    Route::get("/user", [CustomAuthController::class, "userProfile"])->name("user-profile")->middleware('isLoggedIn');
    Route::get("/manager", [CustomAuthController::class, "managerManage"])->name("manager-manage")->middleware("isAdmin");
    Route::get("/logout", [CustomAuthController::class, "logout"])->name("logout");
    Route::put("/change", [CustomAuthController::class, "change"])->name("change");
    Route::get("/delete/{id}", [CustomAuthController::class, "delete"])->name("delete");
});

Route::prefix("manage")->name("manage.")->group(function () {
    // [GET]
    Route::get("/product", [ManageController::class, "product"])->name("product")->middleware("isAdmin");
    Route::get("/category", [ManageController::class, "category"])->name("category")->middleware("isAdmin");
    Route::get("/order-detail/{id}", [ManageController::class, "orderDetail"])->name("order-detail")->middleware("isAdmin");
    Route::get("/order", [ManageController::class, "order"])->name("order")->middleware("isAdmin");
    // [POST]
    Route::get("/delete-product", [ManageController::class, "deleteProduct"])->name("delete-product")->middleware("isAdmin");
    Route::post("/category", [ManageController::class, "addCategory"])->name("add-category")->middleware("isAdmin");
    Route::get("/category/{id}", [ManageController::class, "deletedCategory"])->name("delete-category")->middleware("isAdmin");
    Route::get("/order/{id}", [ManageController::class, "deletedOrder"])->name("delete-order")->middleware("isAdmin");
    Route::post("/product", [ManageController::class, "addProduct"])->name("add-product")->middleware("isAdmin");
    // [PUT]
    Route::put("/category/{id}", [ManageController::class, "updatedCategory"])->name("update-category")->middleware("isAdmin");
    Route::put("/product", [ManageController::class, "updatedProduct"])->name("update-product")->middleware("isAdmin");
});
#endregion

#region search
Route::prefix("search")->name("search.")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/keyword", [SearchController::class, "keyword"])->name("keyword");
    Route::get("/{category}", [SearchController::class, "category"])->name("category-name");
});
#endregion search 


Route::prefix("cart")->name("cart.")->group(function() {
    Route::get("/",[ CartController::class, "index"])->name("index")->middleware('notLoggedIn');
    Route::get("/delete-id/{id}", [CartController::class, "deleteId"])->name("delete-id");
});


Route::prefix("products")->name("products.")->group(function () {
    Route::get("/", [ProductController::class, "index"])->name("home");
    Route::get("/{title}", [ProductController::class, "productDetails"])->name("detail");
    Route::post("/{title}", [ProductController::class, "productOrder"])->name("order")->middleware('notLoggedIn');
});

Route::prefix("order")->name("order.")->group(function () {
    Route::post("/", [OrderController::class, "pay"])->name("pay");
    Route::get("/success", [OrderController::class, "success"])->name("success");
});
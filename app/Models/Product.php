<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        "title",
        "price",
        "discount",
        "thumbnail",
        "description"
    ];

    protected $nullable = [
        "description"
    ];

    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function categories() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function order_details() {
        return $this->hasMany(OrderDetail::class);
    }

    public function product_details() {
        return $this->hasMany(ProductDetail::class);
    }
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_details";

    public function products() {
        return $this->belongsTo(Product::class, "product_id", "id");
    }

    public function attributes() {
        return $this->belongsTo(Attribute::class, "attribute_id", "id");
    }
    use HasFactory;
}

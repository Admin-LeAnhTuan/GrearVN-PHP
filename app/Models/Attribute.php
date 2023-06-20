<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = "attributes";

    protected $fillable = ["name"];

    public function product_details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function attribute_details()
    {
        return $this->hasMany(AttributeDetail::class);
    }
    use HasFactory;
}

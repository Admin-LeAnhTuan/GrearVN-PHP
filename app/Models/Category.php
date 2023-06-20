<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "name"
    ];

    protected $table = "categories";

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function attribute_details() {
        return $this->hasMany(AttributeDetail::class);
    }
    use HasFactory;
}

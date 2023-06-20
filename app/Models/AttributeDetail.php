<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeDetail extends Model
{
    protected $table = "attribute_details";

    public function attributes() {
        return $this->belongsTo(Attribute::class, "attribute_id", "id");
    }

    public function properties() {
        return $this->belongsTo(Property::class, "property_id", "id");
    }

    public function categories() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        "fullname",
        "email",
        "address",
        "total"
    ];

    protected $nullable = [
        "note",
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    use HasFactory;
}

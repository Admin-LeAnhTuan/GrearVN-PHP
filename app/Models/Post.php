<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //** Quy ước khóa chính**/
    protected $primaryKey = "id";
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        "id",
        "title",
        "content",
        "status",
        "create_at",
        "update_at"
    ];
}

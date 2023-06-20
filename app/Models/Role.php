<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name"
    ];
    protected $table = "roles";


    public function users()
    {
        // return $this->belongsTo(User::class, "user_id", "id");
        return $this->hasMany(User::class);
    }
    use HasFactory;
}

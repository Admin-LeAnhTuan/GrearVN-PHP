<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $nullable = [
        "updated_at",
        "created_at"
    ];

    public function getAllUser()
    {
        $users = DB::select('SELECT * from users ORDER BY create_at');
        return $users;
    }

    public function addUser($data)
    {

       return DB::insert("INSERT INTO users (fullname,email,create_at) values (?,?,?)", $data);
    }

    public function getDetail($id)
    {
        return DB::select("SELECT * FROM " . $this->table . "  WHERE id = ?", [$id]);
    }

    public function updateUser($data, $id)
    {
        return DB::update("UPDATE " . $this->table . '  SET fullname=?, email=?, create_at=? WHERE id = ? ', $data);
    }

    public function deleteUser($id) {
        return DB::delete("DELETE FROM $this->table WHERE id=?", [$id]);
    }
}

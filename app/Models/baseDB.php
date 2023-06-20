<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class baseDB extends Model
{
    use HasFactory;
    public function __construct()
    {
    }
    public function getAllData($tableName)
    {
        $data = DB::select('SELECT * from users ORDER BY create_at');
        return $data;
    }

    public function addData($tableName, $data)
    {
        $keys = [];
        $values = [];
        $dataInsert = "";
        $countValues = "";
        if(count($data) == 1) {
            $key = array_key_first($data);
            $dataInsert = "(" . $key . ")";
            $countValues .= "('" . $data[$key] . "')";
        } else {
            foreach ($data as $key => $value) {
                array_push($keys, $key);
                array_push($values, $value);
                if ($key === array_key_first($data)) {
                    $dataInsert = $dataInsert . "(" . $key . ",";
                    $countValues = $countValues . "(" . "?,";
                } else if ($key === array_key_last($data)) {
                    $dataInsert = $dataInsert . $key . ")";
                    $countValues = $countValues . "?" . ")";
                } else {
                    $dataInsert = $dataInsert . $key . ",";
                    $countValues = $countValues . "?,";
                }
            }
        }

        return DB::insert("INSERT INTO $tableName " . $dataInsert . " values " . $countValues, $values);
    }

    public function getDataDetail($tableName, $id)
    {
        return DB::select("SELECT * FROM " . $tableName . "  WHERE id = ?", [$id]);
    }

    public function updateData($tableName, $data, $id)
    {
        $keys = [];
        $values = [];
        $dataInsert = "";

        foreach ($data as $key => $value) {
            array_push($keys, $key);
            array_push($values, $value);
            if ($key === array_key_last($data)) {
                $dataInsert = $dataInsert . $key . "=? ";
            } else {
                $dataInsert = $dataInsert . $key . "=?, ";
            }
        }
        
        array_push($values, $id);

        return DB::update("UPDATE " . $tableName . '  SET ' . $dataInsert . ' WHERE id = ? ', $values);
    }

    public function deleteOne($tableName, $id)
    {
        return DB::delete("DELETE FROM $tableName WHERE id=?", [$id]);
    }
}

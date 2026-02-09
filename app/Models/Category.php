<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public static function getAll()
    {
        $categories = DB::table('categories')->get();
        return $categories;
    }

    public static function store($data)
    {
        return DB::table('categories')->insert($data);
    }

    public static function getCategoryById($id)
    {
        $categories = DB::table('categories')->where('id', $id)->first();
        return $categories;
    }

    public static function updateData($id, $data)
    {
        return DB::table('categories')->where('id', $id)->update($data);
    }
}

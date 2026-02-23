<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Category extends Model
{
    public static function getAll($request)
    {
        $query = DB::table('categories');
        if ($request->has('category_name, id')) {
            $query->where('category_name', 'like', '%' . $request->category_name . '%');
        }
        if ($request->has('id')) {
            $query->where('id', $request->id);
        }

        $categories = $query->get();
        // $categories = DB::table('categories')->get();
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

    public static function deleteData($id)
    {
        return DB::table('categories')->where('id', $id)->delete();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = ['product_code','product_name', 'category_id', 'price', 'unit'];

    public static function getAll($request)
{
    $query = DB::table('produks')
        ->join('categories', 'produks.category_id', '=', 'categories.id')
        ->select(
            'produks.*',
            'categories.category_name'
        );

    if ($request->has('product_name') && !empty($request->product_name)) {
        $query->where('product_name', 'like', '%' . $request->product_name . '%');
    }

    if ($request->has('id') && !empty($request->id)) {
        $query->where('produks.id', $request->id);
    }

    return $query->get();
}

    public static function store($data)
    {
        return DB::table('produks')->insert($data);
    }

    public static function getProdukById($id)
    {
        return DB::table('produks')->where('id', $id)->first();
    }

    public static function updateData($id, $data)
    {
        return DB::table('produks')->where('id', $id)->update($data);
    }

    public static function deleteData($id)
    {
        return DB::table('produks')->where('id', $id)->delete();
    }
}

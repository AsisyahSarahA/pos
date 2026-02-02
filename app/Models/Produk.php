<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public static function getDataproduk()
    {

        $dataproduk = [
            [
                'kode_produk' => 'B01',
                'nama_produk' => 'Bengbang'
            ],
            [
                'kode_produk' => 'B02',
                'nama_produk' => 'Taro'
            ],
            [
                'kode_produk' => 'B03',
                'nama_produk' => 'Better'
            ],

        ];

        return $dataproduk;

    }
}

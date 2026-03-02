<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Category;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data['title'] = "Judul Produk";
         {
        $dataproduk  = Produk::getAll($request);
        // dd($categories);
        return view('produk.index', compact('dataproduk'));
    }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::getAll(request());
        return view('produk.create', compact('categories'));

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'unit' => $request->unit,
        ];


        $store = Produk::store($data);
        if ($store) {
            return redirect('/produk')->with('success', 'Data Berhasil Disimpan');
        } else {
            echo "Data Gagal Disimpan";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::getProdukById($id);
        $categories = Category::getAll(request());
        return view('produk.edit', compact('produk', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'unit' => $request->unit,
        ];

        $update = Produk::updateData($id, $data);
        if ($update) {
            return redirect('/produk')->with('success', 'Data Berhasil Diupdate');
        } else {
            echo "Data Gagal Diupdate";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $delete = Produk::deleteData($id);
        if($delete){
           return redirect('/produk')->with('success', 'Data Berhasil Dihapus');
        } else {
            echo "Data Gagal Dihapus";
        }
    }
}

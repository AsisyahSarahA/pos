<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataproduk = Produk::getAllWithFilters($request);

        return view('produk.index', compact('dataproduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); //  Eloquent: ambil semua category
        return view('produk.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'product_code' => 'required|string|max:6|unique:produks,product_code',
            'product_name' => 'required|string|max:50',
            'category_id'  => 'required|exists:categories,id',
            'price'        => 'required|integer|min:0',
            'unit'         => 'required|string|max:6',
        ],
        [
            'product_code.required' => 'Kode produk wajib diisi',
            'product_code.unique'   => 'Kode produk sudah digunakan',
            'product_code.max'      => 'Kode produk maksimal 6 karakter',
            'product_name.required' => 'Nama produk wajib diisi',
            'category_id.required'  => 'Kategori wajib dipilih',
            'category_id.exists'   => 'Kategori tidak valid',
            'price.required'       => 'Harga wajib diisi',
            'price.integer'        => 'Harga harus berupa angka',
            'price.min'            => 'Harga tidak boleh negatif',
            'unit.required'        => 'Satuan wajib diisi',
            'unit.max'             => 'Satuan maksimal 6 karakter',
        ]);


        Produk::create($validated);

        return redirect()->route('produk.index')
            ->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::with('category')->findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        $categories = Category::all();

        return view('produk.edit', compact('produk', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);

        $validated = $request->validate([
            'product_code' => [
                'required',
                'string',
                'max:6',
                Rule::unique('produks', 'product_code')->ignore($produk->id)
            ],
            'product_name' => 'required|string|max:255',
            'category_id'  => 'required|exists:categories,id',
            'price'        => 'required|integer|min:0',
            'unit'         => 'required|string|max:6',
        ]);


        $produk->update($validated);

        return redirect()->route('produk.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

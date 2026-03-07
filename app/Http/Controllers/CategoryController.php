<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::getAllWithFilters($request);

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => [
                'required',
                'string',
                'max:30',
                'unique:categories,category_name'
            ],
        ], [
            'category_name.required' => 'Nama kategori wajib diisi',
            'category_name.unique'   => 'Nama kategori sudah digunakan',
            'category_name.max'      => 'Nama kategori maksimal 30 karakter',
        ]);

        Category::create($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'category_name' => [
                'required',
                'string',
                'max:30',
                Rule::unique('categories', 'category_name')->ignore($category->id)
            ],
        ], [
            'category_name.required' => 'Nama kategori wajib diisi',
            'category_name.unique'   => 'Nama kategori sudah digunakan',
            'category_name.max'      => 'Nama kategori maksimal 30 karakter',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        
        if ($category->products()->count() > 0) {
            return redirect()->route('categories.index')
                ->with('error', 'Tidak dapat menghapus kategori yang masih memiliki produk!');
        }

        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

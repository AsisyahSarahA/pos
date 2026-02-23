<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $categories  = Category::getAll($request);
        // dd($categories);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $data = [
            'category_name' => $request->category_name,
        ];


        $store = Category::store($data);
        if ($store) {
            return redirect('/categories')->with('success', 'Data Berhasil Disimpan');

        } else {
            echo "Data Gagal Disimpan";
        }
    }



    public function edit ($id)
    {
        // $categories = Category::getCategoryById($id);
        // return view ('categories.edit', compact('categories'));


        $data['category'] = Category::getCategoryById($id);
        return view('categories.edit', $data);

    }



    public function update (Request $request, $id)
    {
        $data = [
            'category_name' => $request->category_name,
        ];

        $update = Category::updateData($id, $data);
        if($update){
           return redirect('/categories')->with('success', 'Data Berhasil Diupdate');
        } else {
            echo "Data Gagal Diupdate";
        }
    }


    public function destroy($id)
    {
        $delete = Category::deleteData($id);
        if($delete){
           return redirect('/categories')->with('success', 'Data Berhasil Dihapus');
        } else {
            echo "Data Gagal Dihapus";
        }
    }
}

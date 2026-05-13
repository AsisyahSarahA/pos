<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $suppliers = Supplier::getAllWithFilters($request);
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataSupplier = Supplier::all();
        return view('supplier.create', compact('dataSupplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplier_code' => 'required|string|max:10|unique:suppliers,supplier_code',
            'supplier_name' => 'required|string|max:50',
            'address'       => 'required|string|max:255',
            'phone'         => 'required|string|max:15',
        ], [
            'supplier_code.required' => 'Kode supplier wajib diisi',
            'supplier_code.unique'   => 'Kode supplier sudah digunakan',
            'supplier_code.max'      => 'Kode supplier maksimal 10 karakter',
            'supplier_name.required' => 'Nama supplier wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'Nomor telepon wajib diisi',
        ]);

        Supplier::create($validated);

        return redirect()->route('suppliers.index')
            ->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {

        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'supplier_code' => 'required|string|max:10|unique:suppliers,supplier_code,' . $supplier->id,
            'supplier_name' => 'required|string|max:50',
            'address'       => 'required|string|max:255',
            'phone'         => 'required|string|max:15',
        ], [
            'supplier_code.required' => 'Kode supplier wajib diisi',
            'supplier_code.unique'   => 'Kode supplier sudah digunakan',
            'supplier_code.max'      => 'Kode supplier maksimal 10 karakter',
            'supplier_name.required' => 'Nama supplier wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'Nomor telepon wajib diisi',
        ]);

        $supplier->update($validated);

        return redirect()->route('suppliers.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return redirect()->route('suppliers.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

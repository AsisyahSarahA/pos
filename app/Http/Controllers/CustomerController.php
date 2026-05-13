<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::getAllWithFilters($request);
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_code' => 'required|string|max:6|unique:customers,customer_code',
            'customer_name' => 'required|string|max:50',
            'address'       => 'required|string|max:255',
            'phone'         => 'required|string|max:20',
        ], [
            'customer_code.required' => 'Kode customer wajib diisi',
            'customer_code.unique'   => 'Kode customer sudah digunakan',
            'customer_code.max'      => 'Kode customer maksimal 6 karakter',
            'customer_name.required' => 'Nama customer wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'Nomor telepon wajib diisi',
        ]);

        Customer::create($validated);

        return redirect()->route('customers.index')
            ->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $validated = $request->validate([
            'customer_code' => 'required|string|max:6|unique:customers,customer_code,' . $customer->id,
            'customer_name' => 'required|string|max:50',
            'address'       => 'required|string|max:255',
            'phone'         => 'required|string|max:20',
        ], [
            'customer_code.required' => 'Kode customer wajib diisi',
            'customer_code.unique'   => 'Kode customer sudah digunakan',
            'customer_code.max'      => 'Kode customer maksimal 6 karakter',
            'customer_name.required' => 'Nama customer wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'Nomor telepon wajib diisi',
        ]);

        $customer->update($validated);

        return redirect()->route('customers.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    
    {
        $customers = Customer::getAll();
        // dd($customers);
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = [
            'customer_code' => $request->customer_code,
            'customer_name' => $request->customer_name,
            'customer_address' => $request->customer_address,
        ];

        $store = Customer::store($data);
        if ($store) {
            return redirect('/customer')->with('success', 'Data Berhasil Disimpan');
        } else {
            echo "Data Gagal Disimpan";
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
           $customer = Customer::getCustomerById($id);
        return view('customer.edit', compact('customer'));

    }

    public function update(Request $request, $id)
    {
        $data = [
            'customer_code' => $request->customer_code,
            'customer_name' => $request->customer_name,
            'customer_address' => $request->customer_address,
        ];

        $update = Customer::updateCustomer($id, $data);
        if ($update) {
            return redirect('/customer')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect('/customer')->with('error', 'Data Gagal Diupdate');
        }
    }

    public function destroy($id)
    {
        $delete = Customer::deleteCustomer($id);
        if ($delete) {
            return redirect('/customer')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('/customer')->with('error', 'Data Gagal Dihapus');
        }
    }

}

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
}

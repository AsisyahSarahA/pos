<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    public static function getAll()
    {
        $customers = DB::table('customers')->get();

        return $customers;
    }

    public static function store($data)
    {
        $store = DB::table('customers')->insert($data);

        return $store;
    }

    public static function getCustomerById($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();

        return $customer;
    }

    public static function updateCustomer($id, $data)
    {
        $update = DB::table('customers')->where('id', $id)->update($data);

        return $update;
    }

    public static function deleteCustomer($id)
    {
        $delete = DB::table('customers')->where('id', $id)->delete();

        return $delete;
    }

    
}

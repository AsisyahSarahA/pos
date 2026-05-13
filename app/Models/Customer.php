<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'customer_code',
        'customer_name',
        'address',
        'phone'
    ];

    /**
     * Scope untuk filter pencarian berdasarkan nama customer
     */
    public function scopeFilterByName($query, ?string $customerName)
    {
        if ($customerName) {
            return $query->where('customer_name', 'like', "%{$customerName}%");
        }
        return $query;
    }

    /**
     * Scope untuk filter berdasarkan customer code
     */
    public function scopeFilterByCode($query, ?string $customerCode)
    {
        if ($customerCode) {
            return $query->where('customer_code', 'like', "%{$customerCode}%");
        }
        return $query;
    }

    /**
     * Method untuk mendapatkan semua customer dengan filter
     */
    public static function getAllWithFilters($request)
    {
        return self::query()
            ->filterByName($request->customer_name)
            ->filterByCode($request->customer_code)
            ->latest()
            ->get();
    }
}

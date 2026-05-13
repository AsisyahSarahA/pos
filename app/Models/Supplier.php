<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'supplier_code',
        'supplier_name',
        'address',
        'phone'
    ];

    /**
     * Scope untuk filter pencarian berdasarkan nama supplier
     */
    public function scopeFilterByName($query, ?string $supplierName)
    {
        if ($supplierName) {
            return $query->where('supplier_name', 'like', "%{$supplierName}%");
        }
        return $query;
    }

    /**
     * Scope untuk filter berdasarkan supplier code
     */
    public function scopeFilterByCode($query, ?string $supplierCode)
    {
        if ($supplierCode) {
            return $query->where('supplier_code', 'like', "%{$supplierCode}%");
        }
        return $query;
    }

    /**
     * Method untuk mendapatkan semua supplier dengan filter
     */
    public static function getAllWithFilters($request)
    {
        return self::query()
            ->filterByName($request->supplier_name)
            ->filterByCode($request->supplier_code)
            ->latest()
            ->get();
    }
}

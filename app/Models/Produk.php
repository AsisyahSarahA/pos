<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'product_code',
        'product_name',
        'category_id',
        'price',
        'unit'
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    /**
     * Relasi ke model Category
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Scope untuk filter pencarian berdasarkan nama produk
     */
    public function scopeFilterByName(Builder $query, ?string $productName): Builder
    {
        if ($productName) {
            return $query->where('product_name', 'like', "%{$productName}%");
        }
        return $query;
    }

    /**
     * Scope untuk filter berdasarkan ID
     */
    public function scopeFilterById(Builder $query, ?int $id): Builder
    {
        if ($id) {
            return $query->where('produks.id', $id);
        }
        return $query;
    }

    /**
     * Method untuk mendapatkan semua produk dengan filter dan relasi category
     */
    public static function getAllWithFilters($request)
    {
        return self::with('category')
            ->filterByName($request->product_name)
            ->filterById($request->id)
            ->latest()
            ->get();
    }
}

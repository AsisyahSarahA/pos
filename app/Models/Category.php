<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name'
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Relasi: Satu kategori memiliki banyak produk
     */
    public function products(): HasMany
    {
        return $this->hasMany(Produk::class, 'category_id');
    }

    /**
     * Scope: Filter berdasarkan nama kategori
     */
    public function scopeFilterByName(Builder $query, ?string $search): Builder
    {
        if ($search) {
            return $query->where('category_name', 'like', "%{$search}%");
        }
        return $query;
    }

    /**
     * Scope: Filter berdasarkan ID
     */
    public function scopeFilterById(Builder $query, ?int $id): Builder
    {
        if ($id) {
            return $query->where('id', $id);
        }
        return $query;
    }

    /**
     * Scope: Urutkan ascending berdasarkan nama
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('category_name', 'asc');
    }

    /**
     * Get all categories dengan filter dari request
     */
    public static function getAllWithFilters($request)
    {
        return self::query()
            ->filterByName($request->get('category_name'))
            ->filterById($request->get('id'))
            ->ordered()
            ->get();
    }
}

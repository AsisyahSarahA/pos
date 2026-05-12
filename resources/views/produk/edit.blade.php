@extends('layouts.app')

@section('content')
    <div id="page-produk" class="page-content active-page p-6 md:p-12 max-w-6xl mx-auto">
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Edit Produk</h1>
                    <p class="text-sm text-slate-400 font-medium">Perbarui informasi produk untuk menjaga keakuratan data.</p>
                </div>
                <div class="flex gap-3 w-full md:w-auto">
                    <a href="{{ route('produk.index') }}"
                        class="flex-1 md:flex-none px-6 py-2.5 rounded-xl text-sm font-bold border border-slate-200 text-slate-600 bg-white hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                        Batal
                    </a>
                    <button type="submit"
                        class="flex-1 md:flex-none px-6 py-2.5 rounded-xl text-sm font-bold bg-[#5d87ff] text-white shadow-lg shadow-blue-100 hover:bg-blue-600 transition-all flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                        Perbarui Data
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Primary Info -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8">
                        <h4 class="text-sm font-bold text-slate-800 mb-6 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-[#5d87ff] rounded-full"></span>
                            Informasi Utama
                        </h4>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Product Name -->
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Nama
                                    Produk</label>
                                <div class="form-group-icon">
                                    <div class="form-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                                            <line x1="7" y1="7" x2="7.01" y2="7" />
                                        </svg>
                                    </div>
                                    <input type="text" name="product_name" value="{{ old('product_name', $produk->product_name) }}"
                                        placeholder="Contoh: Asus ROG Strix" required
                                        class="input-with-icon w-full px-4 py-3 rounded-xl border {{ $errors->has('product_name') ? 'border-red-300' : 'border-slate-100' }} bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] focus:ring-4 focus:ring-blue-50 transition-all">
                                </div>
                                @error('product_name')
                                    <p class="text-[10px] font-bold text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Product Code -->
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Kode
                                    Produk</label>
                                <div class="form-group-icon">
                                    <div class="form-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                                            <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                            <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                                            <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                                            <path d="M7 7h10v10H7z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="product_code" value="{{ old('product_code', $produk->product_code) }}"
                                        placeholder="Contoh: PRD-001" required
                                        class="input-with-icon w-full px-4 py-3 rounded-xl border {{ $errors->has('product_code') ? 'border-red-300' : 'border-slate-100' }} bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] focus:ring-4 focus:ring-blue-50 transition-all">
                                </div>
                                @error('product_code')
                                    <p class="text-[10px] font-bold text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Harga
                                    (Rp)</label>
                                <div class="form-group-icon">
                                    <div class="form-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <line x1="12" x2="12" y1="2" y2="22" />
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                        </svg>
                                    </div>
                                    <input type="number" name="price" value="{{ old('price', $produk->price) }}" placeholder="0"
                                        required
                                        class="input-with-icon w-full px-4 py-3 rounded-xl border {{ $errors->has('price') ? 'border-red-300' : 'border-slate-100' }} bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] transition-all">
                                </div>
                                @error('price')
                                    <p class="text-[10px] font-bold text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Unit -->
                            <div class="space-y-2">
                                <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Satuan
                                    (Unit)</label>
                                <div class="form-group-icon">
                                    <div class="form-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                            <line x1="12" y1="22.08" x2="12" y2="12" />
                                        </svg>
                                    </div>
                                    <input type="text" name="unit" value="{{ old('unit', $produk->unit) }}"
                                        placeholder="Contoh: Pcs, Box, Kg" required
                                        class="input-with-icon w-full px-4 py-3 rounded-xl border {{ $errors->has('unit') ? 'border-red-300' : 'border-slate-100' }} bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] transition-all">
                                </div>
                                @error('unit')
                                    <p class="text-[10px] font-bold text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Category Select -->
                        <div class="mt-6 space-y-2">
                            <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Kategori
                                Inventaris</label>
                            <div class="form-group-icon">
                                <div class="form-icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect width="7" height="7" x="3" y="3" rx="1" />
                                        <rect width="7" height="7" x="14" y="3" rx="1" />
                                        <rect width="7" height="7" x="14" y="14" rx="1" />
                                        <rect width="7" height="7" x="3" y="14" rx="1" />
                                    </svg>
                                </div>
                                <select name="category_id" required
                                    class="input-with-icon w-full px-4 py-3 rounded-xl border {{ $errors->has('category_id') ? 'border-red-300' : 'border-slate-100' }} bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] appearance-none cursor-pointer">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $produk->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <p class="text-[10px] font-bold text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Additional Options -->
                    <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8">
                        <h4 class="text-sm font-bold text-slate-800 mb-6">Status & Visibilitas</h4>
                        <div class="flex flex-wrap gap-10">
                            <div class="space-y-4">
                                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Opsi Stok</p>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="checkbox" name="is_active" checked
                                        class="w-5 h-5 rounded-md border-slate-200 accent-[#5d87ff] transition-all cursor-pointer">
                                    <span
                                        class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Aktifkan
                                        Produk</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sidebar Info -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Tip Box -->
                    <div
                        class="bg-gradient-to-br from-[#5d87ff] to-[#4e73df] rounded-[24px] p-6 text-white shadow-xl shadow-blue-100">
                        <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path
                                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                                <path d="M9 18h6" />
                                <path d="M10 22h4" />
                            </svg>
                        </div>
                        <h5 class="font-bold text-sm mb-2">Tips Perubahan</h5>
                        <p class="text-[11px] leading-relaxed opacity-80">
                            Pastikan <strong>Kode Produk</strong> tetap unik untuk menghindari duplikasi data saat mengedit.
                            Perubahan harga akan mempengaruhi laporan penjualan baru.
                        </p>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-6 flex gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-[#5d87ff] shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="16" x2="12" y2="12" />
                                <line x1="12" y1="8" x2="12.01" y2="8" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-700">Pembaruan Data</p>
                            <p class="text-[10px] text-slate-400 mt-1 leading-relaxed">Pembaruan data pada produk akan otomatis diterapkan di seluruh modul terkait secara real-time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

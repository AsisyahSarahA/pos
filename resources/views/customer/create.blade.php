<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        <div>
            <label>Kode Produk *</label><br>
            <input type="text" name="product_code"
                   value="{{ old('product_code') }}"
                   required maxlength="6">
            @error('product_code') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Nama Produk *</label><br>
            <input type="text" name="product_name"
                   value="{{ old('product_name') }}"
                   required>
            @error('product_name') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Kategori *</label><br>
            <select name="category_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Harga *</label><br>
            <input type="number" name="price"
                   value="{{ old('price') }}"
                   required min="0">
            @error('price') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Satuan *</label><br>
            <input type="text" name="unit"
                   value="{{ old('unit') }}"
                   required maxlength="6" placeholder="pcs, kg, dll">
            @error('unit') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <br>
        <button type="submit">💾 Simpan</button>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </form>
</body>
</html>

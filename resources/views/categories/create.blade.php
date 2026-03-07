<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>
    <h1>Tambah Kategori Baru</h1>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px; padding: 10px; background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px;">
            <strong>⚠️ Terjadi kesalahan:</strong>
            <ul style="margin: 5px 0 0 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" style="max-width: 500px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="category_name" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama Kategori *</label>
            <input type="text"
                   id="category_name"
                   name="category_name"
                   value="{{ old('category_name') }}"
                   placeholder="Contoh: Elektronik, Makanan, dll"
                   required
                   maxlength="30"
                   style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box;">
            @error('category_name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" style="padding: 10px 25px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">💾 Simpan</button>
            <a href="{{ route('categories.index') }}" style="margin-left: 10px; padding: 10px 25px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;">↩ Kembali</a>
        </div>
    </form>
</body>
</html>

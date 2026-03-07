<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Halaman Kategori</h1>

    {{-- Flash Messages --}}
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px; padding: 10px; background: #d4edda; border: 1px solid #c3e6cb; border-radius: 4px;">
            ✅ {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div style="color: red; margin-bottom: 10px; padding: 10px; background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px;">
            ⚠️ {{ session('error') }}
        </div>
    @endif

    {{-- Form Filter --}}
    <form method="GET" action="{{ route('categories.index') }}" style="margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 4px;">
        <label>Cari Kategori:</label>
        <input type="text" name="category_name" placeholder="Nama kategori..."
               value="{{ request('category_name') }}" style="padding: 5px 10px; margin-right: 10px;">
        <input type="number" name="id" placeholder="ID..."
               value="{{ request('id') }}" style="padding: 5px 10px; margin-right: 10px; width: 80px;">
        <button type="submit" style="padding: 5px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">🔍 Cari</button>
        <a href="{{ route('categories.index') }}" style="margin-left: 5px; padding: 5px 15px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px;">↺ Reset</a>
    </form>

    {{-- Tombol Tambah --}}
    <a href="{{ route('categories.create') }}" style="display: inline-block; margin-bottom: 15px; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 4px;">+ Tambah Kategori</a>

    {{-- Tabel Data --}}
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead style="background: #007bff; color: white;">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Kategori</th>
                {{-- <th>Jumlah Produk</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr style="text-align: center;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->id }}</td>
                    <td style="text-align: left;">{{ $category->category_name }}</td>
                    {{-- <td>
                        <span style="background: #17a2b8; color: white; padding: 3px 10px; border-radius: 12px; font-size: 12px;">
                            {{ $category->products->count() }} produk
                        </span>
                    </td> --}}
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}"
                           style="display: inline-block; padding: 5px 12px; background: #ffc107; color: #212529; text-decoration: none; border-radius: 4px; margin-right: 5px;">✏️ Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}"
                              method="POST" style="display: inline-block;"
                              onsubmit="return confirm('Yakin ingin menghapus kategori ini?\n\n⚠️ Pastikan tidak ada produk yang menggunakan kategori ini.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 12px; background: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer;">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px; color: #6c757d;">
                        📭 Tidak ada data kategori
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

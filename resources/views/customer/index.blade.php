<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Halaman Produk</h1>

    {{-- Flash message --}}
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Filter --}}
    <form method="GET" action="{{ route('produk.index') }}" style="margin-bottom: 20px;">
        <input type="text" name="product_name" placeholder="Cari nama produk..."
               value="{{ request('product_name') }}">
        <button type="submit">Cari</button>
        <a href="{{ route('produk.index') }}">Reset</a>
    </form>

    <a href="{{ route('produk.create') }}">+ Tambah Produk</a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 10px; width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataproduk as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $produk->product_code }}</td>
                    <td>{{ $produk->product_name }}</td>
                    <td>{{ $produk->category->category_name ?? '-' }}</td>
                    <td>Rp {{ number_format($produk->price, 0, ',', '.') }}</td>
                    <td>{{ $produk->unit }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $produk->id) }}">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}"
                              method="POST" style="display: inline;"
                              onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Tidak ada data produk</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

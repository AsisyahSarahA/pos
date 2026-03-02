<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Page</title>
</head>

<body>
    <h1>Halaman Produk</h1>
    {{-- <h3>{{ $title }}</h3> --}}
    <table border="1" cellpadding="10" cellspacing="0">
        <button class="btn btn-primary m-2 p-2 rounded-md bg-blue-500 text-white">
            <a href="/produk/create">Tambah Produk</a></button>
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($dataproduk as $produk)
                <tr>
                    <td>{{ $produk->product_code }}</td>
                    <td>{{ $produk->product_name }}</td>
                    <td>{{ $produk->category_name }}</td>
                    <td>{{ $produk->price }}</td>
                    <td>{{ $produk->unit }}</td>
                    <td>
                        <button class="btn btn-primary m-2 p-2 rounded-md bg-green-500 text-white">
                            <a href="{{ route('produk.edit', $produk->id) }}">Edit</a></button>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST"
                            st  yle="display: inline-block">

                            @csrf
                            {{-- ini untuk token hapus csrf --}}
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>

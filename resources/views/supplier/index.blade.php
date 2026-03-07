<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier Page</title>
</head>

<body>
    <h1>Halaman Supplier</h1>
    {{-- <h3>{{ $title }}</h3> --}}
    
    <table border="1" cellpadding="10" cellspacing="0">
        <button class="btn btn-primary m-2 p-2 rounded-md bg-blue-500 text-white">
            <a href="/suppliers/create">Tambah Supplier</a></button>
        <thead>
            <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->supplier_code }}</td>
                    <td>{{ $supplier->supplier_name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>
                        <button class="btn btn-primary m-2 p-2 rounded-md bg-green-500 text-white">
                            <a href="{{ route('suppliers.edit', $supplier->id) }}">Edit</a></button>
                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST"
                            st  yle="display: inline-block">

                            @csrf
                            {{-- ini untuk token hapus csrf --}}
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>

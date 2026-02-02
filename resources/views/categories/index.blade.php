<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Page</title>
</head>

<body>
    <h1>Halaman Kategori</h1>
    {{-- <h3>{{ $title }}</h3> --}}
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($categories as $category )
                <tr>
                    <td>{{ $category -> id}}</td>
                    <td>{{ $category -> category_name}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>

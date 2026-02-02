<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Page</title>
</head>

<body>
    <h1>Halaman Customer</h1>
    {{-- <h3>{{ $title }}</h3> --}}
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Kode Customer</th>
                <th>Nama Customer</th>
                <th>Alamat Customer</th>
                <th>Telepon Customer</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($customers as $customer )
                <tr>
                    <td>{{ $customer -> customer_code}}</td>
                    <td>{{ $customer -> customer_name}}</td>
                    <td>{{ $customer -> customer_address}}</td>
                    <td>{{ $customer -> customer_phone}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>

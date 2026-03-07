<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Supplier</title>
</head>

<body>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        <h3>Edit New Supplier</h3>
        {{-- code validasi redirect --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{--  --}}
        @csrf
        @method('PUT')
        <input type="hidden" placeholder="add supplier code" name="supplier_code" value="{{ $supplier->supplier_code }}"
            required>
        <input type="text" placeholder="add supplier name" name="supplier_name" value="{{ $supplier->supplier_name }}"
            required>
        <input type="text" placeholder="add address" name="address" value="{{ $supplier->address }}" required>
        <input type="text" placeholder="add phone" name="phone" value="{{ $supplier->phone }}" required>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

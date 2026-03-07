<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Supplier</title>
</head>

<body>

    <form action="{{ route('suppliers.store') }}" method="POST">

        <h3>Add New Supplier</h3>
        @csrf
        <input type="text" placeholder="add supplier code" name="supplier_code" required>
        @error('supplier_code')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="add supplier name" name="supplier_name" required>
        @error('supplier_name')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="add address" name="address" required>
        @error('address')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="add phone" name="phone" required>
        @error('phone')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

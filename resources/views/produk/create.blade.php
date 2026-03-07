<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>

<body>

    <form action="{{ route('produk.store') }}" method="POST">

        <h3>Add New Product</h3>
        @csrf
        <input type="text" placeholder="add product name" name="product_name" required>
        @error('product_name')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="add product code" name="product_code" required>
        @error('product_code')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="number" placeholder="add price" name="price" required>
        @error('price')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <input type="text" placeholder="add unit" name="unit" required>
        @error('unit')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

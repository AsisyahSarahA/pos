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
        <input type="text" placeholder="add product code" name="product_code" required>
        <input type="number" placeholder="add price" name="price" required>
        <input type="text" placeholder="add unit" name="unit" required>
         <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

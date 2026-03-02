<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        <h3>Edit New Product</h3>
        {{-- code validasi redirect --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{--  --}}
        @csrf
        @method('PUT')
        <input type="hidden" placeholder="add product code" name="product_code" value="{{ $produk->product_code }}"
            required>
        <input type="text" placeholder="add product name" name="product_name" value="{{ $produk->product_name }}"
            required>
        <input type="number" placeholder="add price" name="price" value="{{ $produk->price }}" required>
        <input type="text" placeholder="add unit" name="unit" value="{{ $produk->unit }}" required>
        <select name="category_id" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $produk->category_id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

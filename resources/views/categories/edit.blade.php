<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Cateegory</title>
</head>

<body>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        <h3>Edit New Category</h3>
        {{-- code validasi redirect --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{--  --}}
        @csrf
        @method('PUT')
        <input type="text" placeholder="add category" name="category_name" value="{{ $category->category_name }}"
            required>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

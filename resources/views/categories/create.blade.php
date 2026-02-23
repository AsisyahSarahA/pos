<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>

<body>

    <form action="{{ route('categories.store') }}" method="POST">
        <h3>Add New Category</h3>
        @csrf
        <input type="text" placeholder="add category" name="category_name" required>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</body>

</html>

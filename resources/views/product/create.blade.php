<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Create new product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        Name:
        <input type="text" name="name">
        <br>
        Price:
        <input type="number" name="price">
        <br>
        Description:
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        stock:
        <input type="number" name="stock">
        <button>submit</button>
    </form>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Product lists</h1>
    <a href="">show my carts</a>
    <a href="{{ route('products.create') }}">Create Product</a>

    @foreach ($products as $product)
        <li>name: {{ $product->name }}, price: {{ $product->price }} <a href="{{ route('products.show',$product->id) }}">show more</a></li>
    @endforeach
    
</body>
</html>
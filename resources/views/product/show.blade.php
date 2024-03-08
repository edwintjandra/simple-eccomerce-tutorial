<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>{{ $product->name }}</h1>
    <p>price: {{ $product->price }}</p>
    <p>
        description: {{ $product->description }}
    </p>
    <p>stock: {{ $product->stock }}</p>

    <h2>Add product to cart</h2>
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <!-- input hidden field, buat store product id ke fungsi addToCart -->
        <input type="hidden" value="{{ $product->id }}" name="productId">
        Quantity:
        <input type="number" name="quantity">
    </form>
    <button>add product</button>
    
    
</body>
</html>
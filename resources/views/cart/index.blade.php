<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
    $totalprice=0;
    @endphp

    <h1>Your Cart list</h1>

    <!-- bikin kondisi kalo misalkan cart nya gaada samsek -->
    @if (count($carts) < 1)
    <h2>Your cart is empty</h2>
    @endif

    @foreach ($carts as $cart)
        <!-- hitung subtotal -->
        @php
        $subtotal=$cart->product->price * $cart->quantity;
        $totalprice+=$subtotal;   
        @endphp
        <li>product name: {{ $cart->product->name }} , product price:{{ $cart->product->price }} , quantity: {{$cart->quantity}}, subtotal: {{ $subtotal }}</li>
    @endforeach

    <!-- hitung total price -->
    <h2>your total price is: {{ $totalprice }}</h2>
    
</body>
</html>
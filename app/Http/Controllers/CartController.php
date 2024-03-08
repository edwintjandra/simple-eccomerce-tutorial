<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //

    public function addToCart(Request $request){
        //(opsional) tambahin validasi kalo user nya gaada
        $user=Auth::user();
        //validasi in lagi, pastiin product id dan quantity nya ada.

        $cart=Cart::create([
            'user_id'=>$user->id,
            'product_id'=>$request->productId,
            'quantity'=>$request->quantity
        ]);

        return redirect()->route('cart.index');
    }

    public function cartIndex(){
        //cari cart yang user_id sama kaya user->id
        $carts=Cart::where('user_id',Auth::user()->id)->get();

        return view('cart.index',compact('carts'));
    }
}

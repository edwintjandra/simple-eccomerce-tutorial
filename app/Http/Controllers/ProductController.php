<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products=Product::All();
        return view('product.index',compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        // jangan lupa buat kasih feedback error" nya ke user; 
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description'=>'required',
            'stock'=>'required'
        ]);    

        $product=Product::create($validated);

        return redirect()->route('products.index');

    }

    public function show($id){
        $product=Product::findOrFail($id);
        //add redirect if product not found

        return view('product.show',compact('product'));

    }
}

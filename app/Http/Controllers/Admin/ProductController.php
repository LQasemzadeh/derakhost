<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'bandwidth' => 'required',
            'space' => 'required|integer',
            'price' => 'required|integer',
            'duration' => 'required|integer',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->bandwidth = $request->bandwidth;
        $product->space = $request->space;
        $product->price = $request->price;
        $product->duration = $request->duration;

        //dd($request->file('image')->store('images'));
        //$product->image = $request->file('image')->store('images');



        $product->save();

        return redirect()->route('admin.product.index');



    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'bandwidth' => 'required',
            'space' => 'required|integer',
            'price' => 'required|integer',
            'duration' => 'required|integer',
        ]);


        $product->name = $request->name;
        $product->description = $request->description;
        $product->bandwidth = $request->bandwidth;
        $product->space = $request->space;
        $product->price = $request->price;
        $product->duration = $request->duration;

        //dd($request->file('image')->store('images'));
        //$product->image = $request->file('image')->store('images');



        $product->save();

        return redirect()->route('admin.product.index');
    }
    public function delete(Product $product)
    {

    }
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }
}

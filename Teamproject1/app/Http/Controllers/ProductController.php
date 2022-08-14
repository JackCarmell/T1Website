<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::take(2)->inRandomOrder()->get(['name', 'slug']);

        return view('products', [
            'categories' => $categories,
            'products' => Product::all()
        ]);
    }

    public function viewProduct($id)
    {
        $product = Product::findOrFail($id);
        
        return view('product', [
            'product' => $product
        ]);
    }

    public function basket()
    {
        return view('basket');
    }

    public function addToBasket($id)
    {
        $product = Product::findOrFail($id);
        ddd($product);
        $basket = session()->get('basket', []);

        if (isset($basket[$id]))
        {
            $basket[$id]['quantity']++;
        } else {
            $basket[$id] = [
                "name" => $product->name,
                "quantity" => "1",
                "price" => $product->price,
                "image" => $product->image,
            ];
        }
        session()->put('basket', $basket);
        return redirect()->back()->with('success', "Item was added to your basket!");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

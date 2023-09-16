<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('products.allProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories =  category::all();
        return view('products.addProduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:100',
            'details' => 'required',
            'photo' => 'required|image',
            'price' => 'required',
            'category_id' => 'required',
        ]);


        $product = new product();
        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->category_id  = $request->category_id;


        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $imageName);

        $product->photo = $imageName;

        $product->save();

        return redirect('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}

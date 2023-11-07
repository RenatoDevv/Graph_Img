<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("product.index", compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create(){
        return view("product.create");
     }
    public function store(Request $request)
    {
        $product = new Product();
        $product = Product::create($request->all());

        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

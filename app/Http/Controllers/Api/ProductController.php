<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()
        ->json(Product::all(), 200, [], JSON_PRETTY_PRINT);

    }

    public function store(Request $request)
    {
        $product = Product::create($request->validate([
            'product_name' => 'required',
            'price'        => 'required|numeric',
            'uom'          => 'required',
            'image'        => 'nullable'
        ]));

        return response()->json($product, 201);
    }

    public function show($id)
    {
        return response()->json(Product::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(['message' => 'Product deleted']);
    }
}


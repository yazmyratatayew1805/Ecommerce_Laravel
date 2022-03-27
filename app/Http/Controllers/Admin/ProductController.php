<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('auth.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $properties = Property::get();
        return view('auth.products.form', compact('categories', 'properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        if ($request->hasfile('image')) {
            $file_full_name = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file_full_name, PATHINFO_FILENAME);
            $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
            $file = $request->file('image');
            $file->storeAs('public/products/', $filename . '.' . $ext);
        }

        $path = 'public/products/' . $filename . '.' . $ext;;
        $params['image'] = $path;



        Product::create($params);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('auth.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $properties = Property::get();
        return view('auth.products.form', compact('product', 'categories', 'properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $params = $request->all();

        if ($request->hasfile('image')) {
            $file_full_name = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file_full_name, PATHINFO_FILENAME);
            $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
            $file = $request->file('image');
            $file->storeAs('public/products/', $filename . '.' . $ext);
        }

        $path = 'public/products/' . $filename . '.' . $ext;;
        $params['image'] = $path;

        foreach (['new', 'hit', 'recommend'] as $fieldName){
            if (!isset($params[$fieldName])){
                $params[$fieldName] = 0;
            }
        }



        $product->update($params);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

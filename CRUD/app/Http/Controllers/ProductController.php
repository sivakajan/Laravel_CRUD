<?php

namespace App\Http\Controllers;

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
        
        $products=Product::all();
        // return "hi";
        return view('products',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'qty'=>'required'
        ]);


        $product=new Product;
        $product->name= $request->name;
        $product->qty= $request->qty;

        $product->save();

        return redirect('/products');
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
    public function edit(Product $product,$product_id)
    {   
        $pro=Product::find($product_id);
        // return $product_id;
        // $pro_id=$product_id
        return view('edit',["product"=>$pro]);
        // return "hi";
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
        $product=Product::find($request->id);
        $product->name= $request->name;
        $product->qty= $request->qty;

        $product->save();

        return redirect('/products');
      // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$product_id)
    {
        $data=Product::find($product_id);
        $data->delete();
        return redirect('/products');
    }
}

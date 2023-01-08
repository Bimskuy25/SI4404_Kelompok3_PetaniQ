<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Product::all());
        $product = Product::all();
        return view('belipanen',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validatedData = $request->validate([
            'nama_product' => 'required|max:2555',
            'user_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_pembayaran' => 'required',
        ]);

        $path = $request->gambar->store('gambar');
        $validatedData['gambar'] = $path;

        Product::create($validatedData);

        // Redirect to home page or show success message
        // return redirect()->route('login')->with('success', 'You have successfully registered');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}

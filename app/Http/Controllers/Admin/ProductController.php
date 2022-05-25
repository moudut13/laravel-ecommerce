<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return $data;
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
        $color = json_encode($request->color);
        $size = json_encode($request->size);
        if ($request->hot_deal == 'on'){
            $hot_deal = true;
        }else{
            $hot_deal = false;
        }

        if ($request->featured_deal == 'on'){
            $featured_deal = true;
        }else{
            $featured_deal = false;
        }

        if ($request->status == 'on'){
            $status = true;
        }else{
            $status = false;
        }

        Product::create([
            'name'                  => ucfirst($request->name),
            'slug'                  => str::slug($request->name),
            'sku'                   => $request->sku,
            'stock'                 => $request->stock,
            'short_desc'            => $request->short_desc,
            'long_desc'             => $request->long_desc,
            'regular_price'         => $request->regular_price,
            'sale_price'            => $request->sale_price,
            'color'                 => $color,
            'size'                  => $size,
            'hot_deal'              => $hot_deal,
            'featured_deal'         => $featured_deal,
            'status'                => $status,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Status the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product -> status = $request->status;
        $product->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}

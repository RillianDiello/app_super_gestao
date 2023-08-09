<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productt;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(10);

        return view ('app.product.index', ['products' => $products, 'request' => $request->all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        return view('app.product.create', ['units' => $units]);
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
     * @param  \App\Models\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function show(Productt $productt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function edit(Productt $productt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productt $productt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productt $productt)
    {
        //
    }
}

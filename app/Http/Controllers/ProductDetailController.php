<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        return view('app.product-detail.create', ['units' => $units]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $rules = [
//          'length' => 'required|integer',
//          'heigth' => 'required|integer',
//          'width' => 'required|integer',
//          'product_id' => 'exists:units,id',
//          'unit_id' => 'exists:units,id'
//        ];
//        $feedback = [
//          'required' => 'Field :attribute is obligated',
//          'name.min' => 'Min size is 3 chars',
//          'name.max' => 'Max size is 40 chars',
//          'description.min' => 'Max size is 3 chars',
//          'description.max' => 'Max size is 2000 chars',
//          'weight.integer' => 'Weight must be a integer',
//          'unit_id.exists' => 'The unit of measure does not exist',
//          'product_id.exists' => 'The product_id of measure does not exist',
//        ];
        ProductDetail::create($request->all());
        return redirect()->route('product-details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductDetail $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $productDetail)
    {
        //
        $units = Unit::all();
        return view('app.product-detail.edit', ['product_detail' => $productDetail, 'units' => $units]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param ProductDetail $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDetail $productDetail)
    {
        //
        $productDetail->update($request->all());
        return redirect()->route('product-details.show', ['product_detail' => $productDetail->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

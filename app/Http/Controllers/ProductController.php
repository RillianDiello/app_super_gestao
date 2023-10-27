<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productt;
use App\Models\Supplier;
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

        return view('app.product.index', ['products' => $products, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $suppliers = Supplier::all();
        return view('app.product.create', ['units' => $units, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $rules = [
          'name' => 'required|min:3|max:40',
          'description' => 'required|min:3|max:2000',
          'weight' => 'required|integer',
          'unit_id' => 'exists:units,id',
          'supplier_id' => 'exists:suppliers,id'
        ];
        $feedback = [
          'required' => 'Field :attribute is obligated',
          'name.min' => 'Min size is 3 chars',
          'name.max' => 'Max size is 40 chars',
          'description.min' => 'Max size is 3 chars',
          'description.max' => 'Max size is 2000 chars',
          'weight.integer' => 'Weight must be a integer',
          'unit_id.exists' => 'The unit of measure does not exist',
          'supplier_id.exists' => 'The supplier of measure does not exist',
        ];
//        dd($request->all());
        $request->validate($rules, $feedback);
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $productt
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('app.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $units = Unit::all();
        $suppliers = Supplier::all();
        return view('app.product.edit', ['product' => $product, 'units' => $units, 'suppliers' => $suppliers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        //
        $rules = [
          'name' => 'required|min:3|max:40',
          'description' => 'required|min:3|max:2000',
          'weight' => 'required|integer',
          'unit_id' => 'exists:units,id',
          'supplier_id' => 'exists:suppliers,id'
        ];
        $feedback = [
          'required' => 'Field :attribute is obligated',
          'name.min' => 'Min size is 3 chars',
          'name.max' => 'Max size is 40 chars',
          'description.min' => 'Max size is 3 chars',
          'description.max' => 'Max size is 2000 chars',
          'weight.integer' => 'Weight must be a integer',
          'unit_id.exists' => 'The unit of measure does not exist',
          'supplier_id.exists' => 'The supplier of measure does not exist',
        ];

        $request->validate($rules, $feedback);

        $product->update($request->all());
       return redirect()->route('product.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function test(){
        $myProduct = Product::find(2);
        return response()->json($myProduct->productDetail->length);
    }
}

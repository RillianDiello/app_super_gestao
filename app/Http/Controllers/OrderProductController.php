<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderProductController extends Controller
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
    public function create(Order $order)
    {
        $products = Product::all();
        return view('app.order-product.create', ['order' => $order, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {

        $rules = [
          'product_id' => 'exists:products,id',
            'amount' => 'required'
          ];
        $feedback = [
          'product_id.exists' => 'The Product does not exist',
            'required' => 'The input :attribute needs to be value'
        ];
        $request->validate($rules, $feedback);

       /* $orderProduct = new OrderProduct();
        $orderProduct->product_id = $request->get('product_id');
        $orderProduct->order_id = $order->id;

        $orderProduct->save();*/

        $order->products()->attach($request->get('product_id'),
          [
            'amount' => $request->get('amount')
          ]);
        return redirect()->route('order-product.create', ['order' => $order->id]);
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
     * @param Order $order
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(OrderProduct $orderProduct, $order_id)
    {
        /*
        print_r($order->getAttributes());
        echo '<br>';
        print_r($product->getAttributes());*/

//        echo $order->id . ' _ ' . $product->id;

//        $order->products()->detach($product->id);

        $orderProduct->delete();
        return redirect()->route('order-product.create', ['order' => $order_id]);
    }
}

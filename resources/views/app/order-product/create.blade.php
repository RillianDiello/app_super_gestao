@extends('app.layouts.basic')

@section('title', 'Add Product on Order')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Add Product on Order</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('order.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      {{$msg ?? ''}}
      <h4>Order details</h4>
      <p>Order Id: {{$order->id}}</p>
      <p>Client: {{$order->client_id}}</p>
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        <h4>Itens orders</h4>
        @component('app.order-product._components.form_order_product', ['order' => $order, 'products' => $products])
        @endcomponent

        <table border="1" width="100%">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>

          </tr>
          </thead>
          <tbody>
          @foreach($order->products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()
@extends('app.layouts.basic')

@section('title', 'Order List')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Orders</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('order.create')}}">New</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <div style="width: 90%; margin-left: auto; margin-right: auto">
        <table border="1" width="100%">
          <thead>
          <tr>
            <th>ID Order</th>
            <th>Client ID</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->client_id}}</td>
              <td><a href="{{ route('order-product.create', ['order' => $order->id]) }}">Add Prodcuts</td>

              <td><a href={{route('order.show', ['order' => $order->id])}}>View</a></td>
              <td><a href={{route('order.edit', ['order' => $order->id])}}>Edit</a></td>
              <td>
                <form id="form_{{ $order->id }}" method="post"
                      action="{{ route('order.destroy', ['order' => $order->id]) }}">
                  @method('DELETE')
                  @csrf
                  <a href="#" onclick="document.getElementById('form_{{ $order->id }}').submit()">Excluir</a>
                </form>
              </td>

            </tr>
          @endforeach
          </tbody>
        </table>
        <div style="width: 5%; height: 5%; margin-left: auto; margin-right: auto">
          {{$orders->appends($request)->links()}}
        </div>
        <br>
        {{ $orders->count() }} - Total Registers per page
        <br>
        {{$orders->total()}} - Total Register
      </div>
    </div>
  </div>
@endsection()